<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ServiceController extends Controller
{
    public function index(){
        $service  = Service::latest()->get();
        return response()->json([
            'sucess'=>true,
            'service'=>$service
        ]);
    }
    public function show(int $id){
        $service = Service::find($id);

        if($service){
            return response()->json([
                'sucess'=>true,
                'service'=>$service,
                'agent'=>$service->agent
            ]);
        }else{
            return response()->json([
                'sucess'=>false,
            ]);
        }
    }

    public function store(Request $request){
        $validattion = Validator::make($request->all(), [
            'libele'=>'required|string|min:6|max:255|unique:services',
            'description'=>'required|string',
            'date_creation'=>'required|date',
        ]);

        
        if($validattion->fails()){
            return response()->json($validattion->errors());
        }
        $insert = [
            'libele'=>$request->libele,
            'description'=>$request->description,
            'date_creation'=>$request->date_creation,
            'statut'=>$request->statut,
            'date_fermeture'=>$request->date_fermeture,
            'longitude'=>$request->longitude,
            'latitude'=>$request->latitude,
            'user_id'=>Auth::user()->id,
            'section_id'=>$request->section_id
        ];
        $service = Service::create($insert);

        if($service){
            return response()->json([
                'sucess'=>true,
                'service'=>$service
            ]);
        }else{
            return response()->json([
                'sucess'=>false,
            ]);
        }
    }
    public function update(Request $request){
        $validattion = Validator::make($request->all(), [
            'libele'=>'required|string|min:6|max:255',
            'description'=>'required|string',
            'date_creation'=>'required|date',
            'id'=>'required|int'
        ]);
        
        if($validattion->fails()){
            return response()->json($validattion->errors());
        }

        $departement = DB::table('services')
                        ->where('id', $request->id)
                        ->update([
                            'libele'=>$request->libele,
                            'description'=>$request->description,
                            'date_creation'=>$request->date_creation,
                            'statut'=>$request->statut,
                            'date_fermeture'=>$request->date_fermeture,
                            'longitude'=>$request->longitude,
                            'latitude'=>$request->latitude
                        ]);
        return response()->json([
            'sucess'=>true,
            'service'=>Service::findOrFail($request->id)
        ]);
    }
}
