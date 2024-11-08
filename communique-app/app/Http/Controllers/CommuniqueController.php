<?php

namespace App\Http\Controllers;

use App\Models\Communique;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\StoreCommuniqueRequest;
use App\Http\Requests\UpdateCommuniqueRequest;
use Illuminate\Support\Facades\Http;

class CommuniqueController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $communique = Communique::latest()->paginate(15);
        return view('communique.index',compact('communique'));
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
    public function store(StoreCommuniqueRequest $request)
    {
        $validation = Validator::make($request->all(),
       [
        'titre'=>'required|string',
        'objet'=>'required|string',
        'contenu'=>'required|string',
       ]);

       if($validation->fails()){
            return $validation->errors();
       }
       $agent = Http::get('http://127.0.0.1:8000/api/agent-show/?email='.session('email'));
;
        if($agent->successful()){
            $agent_trouver = $agent->object();
            
            if($agent_trouver->success != true){
                
                return back()->with('echec','Connectz vous pour effectuer cette action');
            }
        }
       $data = [
            'titre'=>$request->titre,
            'objet'=>$request->objet,
            'contenu'=>$request->contenu,
            'concerne'=>$request->concerne,
            'auteur_nom'=>$agent_trouver->agent->nom,
            'auteur_fonction'=>$agent_trouver->agent->fonction,
            'auteur_id'=>$agent_trouver->agent->id
       ];

        $insert = Communique::firstOrCreate($data);
        if(!$insert){
            return back()->with('echec','erreur de sauvegarde');
        }
        return back()->with('success','sauvegardé');

    }

    /**
     * Display the specified resource.
     */
    public function show(Communique $communique)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Communique $communique)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCommuniqueRequest $request, Communique $communique)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Communique $communique)
    {
        //
    }
}
