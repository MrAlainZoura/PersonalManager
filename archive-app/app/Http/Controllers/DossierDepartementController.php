<?php

namespace App\Http\Controllers;

use App\Models\Dossier;
use Illuminate\Http\Request;
use App\Models\DossierDepartement;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;

class DossierDepartementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //recuperer tous les deparement via l'api

        $departement = Http::get('http://127.0.0.1:8000/api/departements');
        if($departement->object()->sucess != true){
            return back()->with('echec',"Erreur,  revenez plutard");
        }
        $departements = $departement->object()->departements;
        
        return view('departementDossier.index',compact('departements'));

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
        
        $validation = Validator::make($request->all(),['libele'=>'required|string', 'departement_id'=>'required']);
        if($validation->fails()){
            return back()->with('error',$validation->errors());
        }
       
        $dossierD = new DossierController();
        $model= new DossierDepartement;
        $libele = $request->libele;
        $id = $request->departement_id;
        $createD = $dossierD->store($model, $libele, $id);

        if($createD['success']!=true){
            return back()->with('echec','Echec de création de dossier');
        }
        $libele = $createD['libele'];
        return back()->with('success',"Dossier $libele créé avec success");
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // $departement = Http::get(''.$id);
        $departement = Http::get('http://127.0.0.1:8000/api/departements/'.$id)->object();
        if($departement->sucess != true){
            return back()->with('echec',"Erreur,  revenez plutard");
        }

        // dd($departement);
        $departements = $departement->departement;
        $section = $departement->section;
        $dossier = DossierDepartement::where('departement_id',$departements->id)->get();
        // dd($dossier[0]->dossier);
        return view('departementDossier.show',compact('departements','section','dossier'));

    }

    
    public function saveDoc(string $id){
        $dossier = Dossier::where('id',$id)->first();
        // dd($dossier->document);
        $sousD = Dossier::where('parent_id', $id)->get();
        // dd($sousD);
        return view('departementDossier.document.index', compact('dossier','sousD'));
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
