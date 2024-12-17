<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Presence;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Barryvdh\DomPDF\Facade\PDF;

class RapportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lancement = 2020;
        $now = Carbon::now()->year;
        $tab = [];
        
        for($i = $lancement; $i <= $now; $i++){
            $presence = Presence::whereYear('h_arrive',$i)->latest()->get();
            if(count($presence) > 0){
                $tab_mois=[];
                for($mois=1; $mois <= 12; $mois++){
                    $presence_mois = Presence::whereYear('h_arrive',$i)->whereMonth('h_arrive',$mois)->get();
                    if(count($presence_mois) > 0){
                        $tab_jour=[];
                        foreach($presence_mois as $key=>$val){
                            $element = Carbon::parse($val->h_arrive)->format('Y-m-d');
                            if($key==0){
                                $tab_jourcle = Presence::where('created_at','like',"%$element%")->get();
                                $tab_jour [$element]= $tab_jourcle;
                            }
                            if($key > 0){
                                
                                $cle= $key-1;
                                $element2 = Carbon::parse($presence_mois[$cle]->h_arrive)->format('Y-m-d');
                
                                if($element != $element2){
                                    $tab_jourcle2 = Presence::where('created_at','like',"%$element2%")->get();
                                    $tab_jour [$element2]= $tab_jourcle2;
                                }
                            }
                            $dernier = count($presence_mois)-1;
                            if($key == $dernier){
                                $tab_jourcle = Presence::where('created_at','like',"%$element2%")->get();
                                $tab_jour[$element]= $tab_jourcle;
                            }
                        }
                        $tab_mois[$mois]=$tab_jour;  
                    }
                } 
                $tab[$i]=$tab_mois;
            }  
        }

        $data = [
            'titre'=>'Rapport Général de présence',
            'data'=>$tab,
            'visite'=>null
        ];
        $pdfRapport = PDF::loadview('rapport.annee', $data);
        return $pdfRapport->download('Rapport Général de présence.pdf');
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
        //
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
