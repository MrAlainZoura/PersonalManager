<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AutheController extends Controller
{

    public function alls(){

        $all = User::all();
        return response()->json([
            'message'=>"success",
            "users"=>$all
        ]);
    }
    //login logout refresh me
    
   public function register(Request $request){
        
        $validattion = Validator::make($request->all(), [
            'password'=>'required|string|min:6|confirmed',
            'name'=>'required|string|max:255',
            'email'=>'required|email|max:255|unique:users'
        ]);
        
        if($validattion->fails()){
            return response()->json($validattion->errors());
        }
       
        $user = User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password)
        ]);

        $token = auth('api')->login($user);
        return $this->respondWithToken($token);
        // return response()->json($user);
   } 
   
    public function login()
    {
        // return response()->json(request());
        $credentials = request(['email', 'password']);

        if (! $token = auth('api')->attempt($credentials)) {
            return response()->json(['error' => 'Unauthorized','koten'=>$token], 401);
        }

        return $this->respondWithToken($token);
    }

   
    public function me()
    {
        return response()->json(auth('api')->user());
    }

    
    public function logout()
    {
        auth()->logout();

        return response()->json(['message' => 'Successfully logged out']);
    }

    public function update(Request $request){
        if(Auth()->user()){
           $validattion = Validator::make($request->all(), [
                'id'=>'required|int',
                'name'=>'required|string|max:255',
                'email'=>'required|email|max:255'
            ]);
            
            if($validattion->fails()){
                return response()->json($validattion->errors());
            }

            $user = User::find($request->id);

            if($user){
                
                $update = DB::table('users')
                            ->where('id', $user->id)
                            ->update(['name' => $request->name, 'email'=>$request->email]);
                
                if($update){
                    return response()->json([
                        'message'=>"Profile mis a jour avec succes"
                    ]);
                }else{
                    return response()->json([
                        'message'=>"Désolé votre action ne peut etre réalisée maintenant, réessayer plus tard"
                    ]);
                }
            }else{
                return response()->json([
                    'message'=>"Vous n'etes pas autorise a effectue cette action"
                ]);
            }
        }else{
                return response()->json([
                    'message'=>"Authentifiez - vous avant d'effectuer cette action"
                ]);
        }
    }

   
    public function refresh()
    {
        return $this->respondWithToken(auth('api')->refresh());
    }

   
    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth('api')->factory()->getTTL() * 60
        ]);
    }
}
