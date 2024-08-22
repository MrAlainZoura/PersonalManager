<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use illuminate\Http\Client\Response;

class UserController extends Controller
{
    public function index(){
        $user  = Http::get('http://127.0.0.1:8000/api/user-profile');
        
        dd($user);
        $message = "error";
        if($user->successful()){
            return view('users', compact('user'));
        }else{
            return view('users', compact('message'));
        }

    }
    public function login(Request $request){
        $data = $request->all();
        // dd($data = $request->_token);
        $client = new Client();
        // dd($client);
    //     $response = $client->request('POST','Http::post("http://127.0.0.1:8000/api/login',
    // [
    //     'form_params'=>[$data]
    // ]);

    // dd($response);
        $user  = Http::post("http://127.0.0.1:8000/api/login?email={{$request->email}}?
        password={{$request->password}}?token={{$request->_token}}");
        dd($user);
    }
}
