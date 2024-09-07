<?php

namespace App\Http\Controllers;

use App\Models\Role;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Http;

class UserController extends Controller
{
    public function index(){
            $role = Role::latest()->get();
            return view('auth.dashboard', compact('role'));
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

    public function loginwith(Request $request){
        $data = $request->all();
        // dd($data);
        $response = Http::withHeaders([
            'content-type'=>'application/json'
        ])->post('http://127.0.0.1:8000/api/auth/login',$data);

        return $response;
    }
}
