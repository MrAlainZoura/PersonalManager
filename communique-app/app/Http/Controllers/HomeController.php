<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Communique;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $communique = Communique::latest()->paginate(10);
       return view('home.index',compact('communique'));
    }

    public function login(Request $request){
        $data = ['email'=>$request->email, 'password'=>$request->password];
        $user =Http::post("http://127.0.0.1:8000/api/auth/login",$data)->object();
        if($user->success != true){
            return back()->with('echec',$user->error);
        }
        $token=$user->access_token;
        $reponse = Http::withToken($token)->post('http://127.0.0.1:8000/api/me')->object();
        session(['email'=>$reponse->message->email,'token'=>$token]);
        $request->session()->regenerate();
        return to_route('communiques.index');
    }

    public function logout(){
        $reponse = Http::withToken(session('token'))->post('http://127.0.0.1:8000/api/logout')->object();
        if($reponse->success == true){
            session()->flush();
        }
        return redirect(url('/'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
