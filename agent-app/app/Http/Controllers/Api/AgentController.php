<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Agent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class AgentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        $validattion = Validator::make($request->all(), [
            'nom'=>'required|string|min:3|max:255',
            'postnom'=>'required|string|min:3|max:255',
            'prenom'=>'required|string|min:3|max:255',
            'genre'=>'required|string|max:255',
            'date_naissance'=>'required|date',
            'engagement'=>'required|date',
        ]);

        
        if($validattion->fails()){
            return response()->json($validattion->errors());
        }
        $insert = [
            'user_id'=>$request->userid,
            'nom'=>$request->nom,
            'postnom'=>$request->postnom,
            'prenom'=>$request->prenom,
            'genre'=>$request->genre,
            'date_naissance'=>$request->date_naissance,
            'engagement'=>$request->engagement,
            'fonction'=>$request->fonction,
            'grade'=>$request->grave,
            'statut'=>'en activité',
            'service_id'=>$request->service_id,
            'user_id'=>$request->user_id
        ];
        $agent = Agent::create($insert);

        if($agent){
        return response()->json([
            'sucess'=>true,
            'departement'=>$agent
        ]);
    }else{
         return response()->json([
            'sucess'=>false,
        ]);
    }
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
