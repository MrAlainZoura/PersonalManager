<?php

namespace App\Http\Controllers;

use App\Models\Document;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\StoreDocumentRequest;
use App\Http\Requests\UpdateDocumentRequest;

class DocumentController extends Controller
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
        $validation = Validator::make($request->all(),[
            'dossier_id'=>'required',
            'libele'=>'required|string',
            'file'=>'required|file|mimes:pdf,jpg,jpeg,png,docx,xlsx,csv,xls,txt,ppt|max:2500'
        ]);

        if($validation->fails()){
          return back()->with('echec', $validation->errors());
        }

        $fichier = $request->file('file');
        $type = $fichier->getClientOriginalExtension();
        $taille = $fichier->getSize();
        $tKb = $taille/1024; //taille en Kb
        
        
        $nombre = Document::where('dossier_id',$request->dossier_id)->where('libele',$request->libele)->count();

        $libele = $request->libele;
        
        if($nombre > 0){
            $libele = $request->libele . $nombre ;
        }

        $data = [
            'dossier_id'=>$request->dossier_id,
            'libele'=>$libele,
            'type'=>$type,
            'taille'=>$tKb
        ];
        $document = Document::create($data);

        if(!$document){
            return back()->with('echec',"Erreur, revenez plutard");
        }
        $fichier = $request->file('file')->storeAs('public/departement',$document->libele.".$type");

        // dd(round($tKb,2) .' Ko', $type);
        // dd($fichier);
        return back()->with('success',"Document archivé avec success");

    }

    /**
     * Display the specified resource.
     */
    public function show(Document $document)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Document $document)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDocumentRequest $request, Document $document)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Document $document)
    {
        //
    }
}
