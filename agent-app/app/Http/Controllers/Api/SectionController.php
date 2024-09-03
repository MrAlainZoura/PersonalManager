<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Section;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class SectionController extends Controller
{
    public function index()
    {
        $sections  = Section::latest()->get();
        return response()->json([
            'sucess'=>true,
            'departements'=>$sections
        ]);
    }
    public function store(Request $request)
    {
        $validattion = Validator::make($request->all(), [
            'libele'=>'required|string|min:6|max:255|unique:sections',
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
            'user_id'=>Auth::user()->id
        ];
        $section = Section::create($insert);

        if($section){
            return response()->json([
                'sucess'=>true,
                'departement'=>$section
            ]);
        }else{
            return response()->json([
                'sucess'=>false,
            ]);
        }
    }
    public function show(string $id)
    {
        $section = Section::find($id);

        if($section){
            return response()->json([
                'sucess'=>true,
                'departement'=>$section
            ]);
        }else{
            return response()->json([
                'sucess'=>false,
            ]);
        }
    }

    public function update(Request $request)
    {
        $validattion = Validator::make($request->all(), [
            'libele'=>'required|string|min:6|max:255',
            'description'=>'required|string',
            'date_creation'=>'required|date',
            'id'=>'required|int'
        ]);
        
        if($validattion->fails()){
            return response()->json($validattion->errors());
        }

        $departement = DB::table('sections')
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
            'departement'=>Section::findOrFail($request->id)
        ]);
    }
}
