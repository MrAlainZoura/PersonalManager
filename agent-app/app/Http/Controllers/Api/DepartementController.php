<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Departement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class DepartementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $departements  = Departement::latest()->get();
        return response()->json([
            'sucess'=>true,
            'departements'=>$departements
        ]);
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
        // $validattion = Validator::make($request->all(), [
            
        //     'date_fermeture',
        //     'longitude',
        //     'latitude'
        // ]);
        $validattion = Validator::make($request->all(), [
            'libele'=>'required|string|min:6|max:255|unique:departements',
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
        $departement = Departement::create($insert);

        if($departement){
        return response()->json([
            'sucess'=>true,
            'departement'=>$departement
        ]);
    }else{
         return response()->json([
            'sucess'=>false,
            'departement'=>$departement
        ]);
    }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $departement = Departement::find($id);

        if($departement){
        return response()->json([
            'sucess'=>true,
            'departement'=>$departement
        ]);
    }else{
        return response()->json([
            'sucess'=>false,
        ]);
    }
    }

    /**
     * Show the form for editing the specified resource.
     */
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

        $departement = DB::table('departements')
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
            'departement'=>Departement::findOrFail($request->id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    // public function update(Request $request, string $id)
    // {
    //     //
    // }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
