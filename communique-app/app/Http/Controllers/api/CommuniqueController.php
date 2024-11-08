<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Communique;

class CommuniqueController extends Controller
{
   public function index(){
    $com = Communique::latest()->get();
    return response()->json([
        'success'=>true,
        'communique'=>$com
    ]);
   }
}
