<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;

class AuthController extends Controller
{

    public function register(Request $request){
        // dd($request->all());
        // pm.sendRequest({
        //     url: 'http://127.0.0.1:8000/sanctum/csrf-cookie',
        //     method: 'GET'
        // }, function (error, response, {cookies}){
        //     if(!error){
        //         pm.collectionVariables.set('xsrf-cookie', cookies.get('XSRF-TOKEN'))
        //     }
        // })
        $data = $request->validate([
            'email'=>['required','email','unique:users'],
            'password'=>['required','min:6'],
            'name'=>['required','min:6']
        ]);

        $user = User::create($data);

        $token = $user->createToken('auth_token')->plainTextToken;

        return response([
            'user'=>$user,
            'token'=>$token
        ]);

    }
    public function login(Request $request){
        $data = $request->validate([
            'email'=>['required','email','exists:users'],
            'password'=>['required','min:6'],
        ]);

        $user = User::where('email',$data['email'])->first();

        if(!$user || !Hash::check($data['password'], $user->password)){
            return response( [
                'message'=>'Email ou mot de pass incorrect'
            ], 401);
        }

        $token = $user->createToken('auth_token')->plainTextToken;

        return [
            'user'=>$user,
            'token'=>$token
        ];

    }

    public function getProfileUser(){
        $userData = auth()->user();
        return response()->json([
            'status'=>true,
            'message'=>'verify',
            'data'=>$userData,
            'id'=>auth()->user()->id
        ],200);
    }

    public function logout(){
        auth()->user()->tokens()->delete();

        return response()->json([
            'status'=>true,
            'message'=>'you have been logout',
            'data'=>[]
        ],200);
    }

    public function loginwith(Request $request){
        $data = $request->all();
        dd($data);
        $response = Http::withHeaders([
            'content-type'=>'application/json'
        ])->post('http://127.0.0.1:8000/api/auth/login',$data);

        return $response;
    }
}
