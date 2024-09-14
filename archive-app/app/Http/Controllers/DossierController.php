<?php

namespace App\Http\Controllers;

use App\Models\Dossier;
use App\Http\Requests\StoreDossierRequest;
use App\Http\Requests\UpdateDossierRequest;
use Illuminate\Support\Facades\Validator;

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
    public function store(StoreDossierRequest $request)
    {
        $data = $request->all();
        $validation = Validator::make($data,['libele'=>'required|string']);
        if($validation->fails()){
            return $validation->errors();
        }

        dd($data);
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
    public function update(UpdateDossierRequest $request, Dossier $dossier)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dossier $dossier)
    {
        //
    }
}
