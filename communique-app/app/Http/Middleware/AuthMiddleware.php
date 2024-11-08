<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Symfony\Component\HttpFoundation\Response;

class AuthMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {

        if(!empty(session('email'))){
            $reponse = Http::withToken(session('token'))->post('http://127.0.0.1:8000/api/me')->object();
            if($reponse != null){
                if($reponse->success != true){
                    return redirect(url('/'));
                }
                return $next($request);
            }
            session()->flush(); 
            return redirect(url('/'));   
        }
        return redirect(url('/'));
    }
}
