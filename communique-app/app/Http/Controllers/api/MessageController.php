<?php

namespace App\Http\Controllers\api;

use App\Models\Message;
use Illuminate\Http\Request;
use App\Models\MessageDestinateur;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\MailController;
use Illuminate\Support\Facades\Validator;

class MessageController extends Controller
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
       $validation = Validator::make($request->all(),
       [
        'titre'=>'required|string',
        'object'=>'required|string',
        'contenu'=>'required|string',
        'auteur_nom'=>'required|string',
        'auteur_fonction'=>'required|string',
        'destination'=>'required|email'
       ]);
       if($validation->fails()){
            return $validation->errors();
       }

       $data = [
            'titre'=>$request->titre,
            'object'=>$request->object,
            'contenu'=>$request->contenu,
            'auteur_nom'=>$request->auteur_nom,
            'auteur_fonction'=>$request->auteur_fonction,
       ];
        // return $data;
        //    $message = Message::create($data);
        //    $agent = Agent::create($insert);

    $insert = Message::firstOrCreate($data);

       if(!$insert){
        return response()->json([
            'success'=>false,
            'error'=>'Erreur de sauvegarde de communiqué'
        ]);
       }
            // return $insert;
            //$agent = Http::get('http://127.0.0.1:8000/api/agent-show/?email='.$request->email); on va recuperer les adresses mail des agent en cas de d'envoi dans un service

        $sendMail = new MailController();
        $to=$request->destination;
        $object=$insert->object; //"Communiqué N°01/MN/024";
        $contenu=[
            'contenu'=>$insert->contenu,
            'titre'=>$insert->titre
        ];

       $envoi = $sendMail->sendMail($to, $object, $contenu);
       if($envoi == false){
        return response()->json([
            'success'=>false,
            'error'=>'Message non envoyé']);
       }

       return response()->json([
            'success'=>true,
            'message'=>$insert
        ]);
    }

    public function comService(Request $request){
        $validation = Validator::make($request->all(),
       [
        'titre'=>'required|string',
        'object'=>'required|string',
        'contenu'=>'required|string',
        'auteur_nom'=>'required|string',
        'auteur_fonction'=>'required|string',
        'service_id'=>'required'
       ]);
       if($validation->fails()){
            return $validation->errors();
       }
       $data = [
        'titre'=>$request->titre,
        'object'=>$request->object,
        'contenu'=>$request->contenu,
        'auteur_nom'=>$request->auteur_nom,
        'auteur_fonction'=>$request->auteur_fonction,
       ];
        
       $insert = Message::firstOrCreate($data);
  
       if(!$insert){
        return response()->json([
            'success'=>false,
            'error'=>'Erreur de sauvegarde de communiqué'
        ]);
       }

       $service = Http::get('http://127.0.0.1:8000/api/get-agent-by-service/'.$request->service_id);
       $sendMail = new MailController();
       $agents = $service->object()->agents;
       $destinateur = 0;
       foreach($agents as $key => $val){
            $email = $val->email;
            // return $email;
            $object=$insert->object; //"Communiqué N°01/MN/024";
            $contenu=[
                'contenu'=>$insert->contenu,
                'titre'=>$insert->titre
            ];

            $envoi = $sendMail->sendMail($email, $object, $contenu);
            $destinateur +=1;

            $messageDestinateur = MessageDestinateur::create([
                'message_id'=>$insert->id,
                'destinateur'=>$email
            ]);
       }
      
      if($envoi == false){
       return response()->json([
           'success'=>false,
           'error'=>'Message non envoyé']);
      }

      return response()->json([
        'success'=>true,
        'message'=>$insert,
        'destinateurs'=>$destinateur
    ]);
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
