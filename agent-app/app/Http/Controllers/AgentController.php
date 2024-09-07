<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\Agent;
use App\Models\Service;
use App\Http\Requests\StoreAgentRequest;
use App\Http\Requests\UpdateAgentRequest;
use Illuminate\Support\Facades\Validator;

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
        $role = Role::latest()->get();
        $service = Service::latest()->get();
        return view('users.index', compact('role','service'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAgentRequest $request)
    {
        // dd($request->all());
        $validattion = Validator::make($request->all(), [
            'nom'=>'required|string|min:3|max:255',
            'matricule'=>'required|string|min:3|max:255',
            'postnom'=>'required|string|min:3|max:255',
            'prenom'=>'required|string|min:3|max:255',
            'genre'=>'required|string|max:255',
            'date_naissance'=>'required|date',
            'engagement'=>'required|date',
            'email'=>'required|email|unique:agents'
        ]);

        
        if($validattion->fails()){
            $message = $validattion->errors();
            return back()->with('echec', $message);
        }
        // dd($request->engagement);$insert = ;
        $date = $request->engagement;
        // dd($date);
        $agent = Agent::create([
            'nom'=>$request->nom,
            'postnom'=>$request->postnom,
            'prenom'=>$request->prenom,
            'genre'=>$request->genre,
            'email'=>$request->email,
            'date_naissance'=>$request->date_naissance,
            'date_engagement'=>"2024-09-19",
            'fonction'=>$request->fonction,
            'grade'=>$request->grave,
            'matricule'=>$request->matricule,
            'statut'=>'En activité',
            'service_id'=>$request->service_id,
            'user_id'=>$request->user_id,
            'role_id'=>$request->role_id
        ]);

        if($agent){
            return back()->with('success', "Agent $agent->nom enregistré avec success");
        }else{
            return back()->with('echec',"Une erreur s'est produite lors de l'enregistrement");
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Agent $agent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Agent $agent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAgentRequest $request, Agent $agent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Agent $agent)
    {
        //
    }
}
