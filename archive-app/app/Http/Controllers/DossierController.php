<?php

namespace App\Http\Controllers;

use App\Models\Dossier;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\StoreDossierRequest;
use App\Http\Requests\UpdateDossierRequest;

class DossierController extends Controller
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
    public function store(Model $model, string $libele, int $id)
    {
        
            switch(class_basename($model))
            {
                case 'DossierAgent':
                    $test = "agent_id";
                    break;
                case 'DossierDepartement':
                    $test = "departement_id";
                    break;
                case 'DossierSection':
                    $test = "section_id";
                    break;
                case 'DossierService':
                    $test = "service_id";
                    break;
                default :
                return ['success'=>false,'lieu'=>'switch'];
                break;
            }
        
        $nombre = $model::where($test,$id)->get();
        $place = 0;
        foreach($nombre as $key =>$val){
            if($val->dossier->libele == ucwords ($libele)){
                $place+=1;
            }
        }
        $libeleInsert = ucwords($libele);
        
        if($place > 0){
            $libeleInsert = ucwords($libele) . $place ;
        }

        $dossier = Dossier::create(['libele'=>$libeleInsert]);
        if(!$dossier){
            return ['success'=>false, 'lieu'=>'creation dossier'];
        }
        $dossierModel = $model::firstOrcreate([$test=>$id,'dossier_id'=>$dossier->id]);
        if(!$dossierModel){
            return ['success'=>false, 'lieu'=>"affectation dossier departemnt"];
        }
        return ['success'=>true, 'libele'=>$dossier->libele];
    }

    public function storeSousDossier (Request $request){

        $validation = Validator::make($request->all(),['libele'=>'required|string','parent_id'=>'required']);
        if($validation->fails()){
            return back()->with('echec',$validation->errors());
        }
        $libele = ucwords($request->libele);
        $verifSD = Dossier::where('parent_id',$request->parent_id)->where('libele','like',"%$libele%")->count(); 
        
        if($verifSD >0){
            $libele = $libele . $verifSD;
        }

        $sousD = Dossier::create(['parent_id'=>$request->parent_id, 'libele'=>$libele]);

        if(!$sousD){
            return back()->with('echec','Echec de creation de sous dossier');
        }

        return back()->with('success',"Sous dossier $sousD->libele créé avec success !");
    }
    /**
     * Display the specified resource.
     */
    public function show(Dossier $dossier)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dossier $dossier)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Dossier $dossier)
    {
        $validation = Validator::make(['libele'=>'required|string|max:150']);

        if($validation->fails()){
            return back()->with('error',$validation->errors());
        }

        $dossier->update([
            'libele'=>$request->libele,
            'parent_id'=>$request->parent_id
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dossier $dossier)
    {
        // $dossier->delete();
    }
}
