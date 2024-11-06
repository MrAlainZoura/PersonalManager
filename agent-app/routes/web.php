<?php

use App\Models\User;
use App\Models\Agent;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\AuthentificationController;

Route::get('/', function () {
    // $agent = Agent::all();
    // $user = User::all();
    // // dd($agent);
    // // foreach($agent as $ke=>$val){
    // //     $user  = User::where('email',$val->email)->first();
    // //     if($user == null){
    // //         $password = Hash::make('0000');
    // //         $createUser = User::firstOrCreate(['email'=>$val->email, 'name'=>$val->nom,'password'=>$password]);
    // //     }
    // // }
    // foreach($user as $k=>$v){
    //     // dd($user);
    //     $update_agent = Agent::where('email',$v->email)->update(['user_id'=>$v->id]);
    //     // dd($update_agent);
    // }
    return view('auth.login');
});

Route::post('login-user',[AuthentificationController::class,'login'])->name('authentification');
Route::delete('login-user',[AuthentificationController::class,'logout'])->name('deconnexion')->middleware('userAdmin');

Route::get('users',[UserController::class, 'index'])->middleware('userAdmin');
Route::post('users-login',[UserController::class, 'loginwith'])->name('login');
Route::post('users-register',[UserController::class, 'register'])->name('register')->middleware('userAdmin');
Route::get('users',[UserController::class, 'index'])->middleware('userAdmin');

Route::group(['middleware'=>'userAdmin'], function(){
    Route::get('/dashboard', [UserController::class, 'index'])->name('dashboard')->middleware('userAdmin');
    Route::get('/dashboard/role/create', [RoleController::class, 'create'])->name('rolecreate')->middleware('userAdmin');
});
Route::post('/dashboard/role/store', [RoleController::class, 'store'])->name('rolestore')->middleware('userAdmin');
Route::post('/agent/store', [AgentController::class, 'store'])->name('agent.store')->middleware('userAdmin');
Route::get('/agent/create', [AgentController::class, 'create'])->name('agent.create')->middleware('userAdmin');
Route::get('/agents/liste', [AgentController::class, 'index'])->name('agent.index')->middleware('userAdmin');