<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthentificationController extends Controller
{
    public function login(Request $request){
        $daliation = Validator::make($request->all(),[
            'email'=>'required|email',
            'password'=>'required|min:4'
        ]);
        if($daliation->fails()){
            return back()->with('echec',$daliation->errors());
        }
        $data = ['email'=>$request->email, 'password'=>$request->password];
        
        if(Auth::attempt($data)){
            $request->session()->regenerate();
            // dd(Auth::user());
            return to_route('dashboard');
        }
       return back()->with('echec','email ou mot de passe incorrect');
    }
    public function logout(){
        Auth::logout();
        return redirect(url('/'));
    }
}
