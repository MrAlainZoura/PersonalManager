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

    public function store(Request $request)
    {
  }
}
