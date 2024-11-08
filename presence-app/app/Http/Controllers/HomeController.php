<?php

namespace App\Http\Controllers;

use App\Jobs\PresenceJob;
use App\Models\Presence;
use Illuminate\Bus\Queueable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Client\ConnectionException as Exception;

class HomeController extends Controller 
{
    use Queueable;
    
    public function index(){
        $presence = Presence::all();
    //   dd ( $presence);
        PresenceJob::dispatchSync($presence);
       
        try {
            $communique =Http::timeout(3)->get("http://127.0.0.1:8003/api/communique")->object()->communique;
        }catch(Exception $e){
            $communique = [];
        }

       return view('welcome',compact('communique'));
 
    }

    public function login(Request $request){
        $data = ['email'=>$request->email, 'password'=>$request->password];
        try{

        $user =Http::post("http://127.0.0.1:8000/api/auth/login",$data)->object();
        if($user->success != true){
            return back()->with('echec',$user->error);
        }
        $token=$user->access_token;
        $reponse = Http::withToken($token)->post('http://127.0.0.1:8000/api/me')->object();
        session(['email'=>$reponse->message->email,'token'=>$token]);
        $request->session()->regenerate();
        return to_route('presences.index');

    }catch(Exception $e){
        // dd($e->getMessage());
        return back()->with("echec","Une erreur s'est produite reessayer plus tard"); 
    }
    }

    public function logout(){
        $reponse = Http::withToken(session('token'))->post('http://127.0.0.1:8000/api/logout')->object();
        if($reponse->success == true){
            session()->flush();
        }
        return redirect(url('/'));
    }

    
}
