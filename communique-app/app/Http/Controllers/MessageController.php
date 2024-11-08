<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\MessageDestinateur;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\MailController;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\StoreMessageRequest;
use App\Http\Requests\UpdateMessageRequest;

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
    public function store(StoreMessageRequest $request)
    {
        // dd($request->all());
        // dd(session()->all());
        $validation = Validator::make($request->all(),
        [
         'titre'=>'required|string',
         'objet'=>'required|string',
         'contenu'=>'required|string',
         'destinateur'=>'required|email'
        ]);
        // protected $fillable = [
        //     'titre',
        //     'object',
        //     'contenu',
        //     'auteur_nom',
        //     'auteur_fonction'
        // ];
 
        if($validation->fails()){
             return back()->with('echec', $validation->errors());

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
             'object'=>$request->objet,
             'contenu'=>$request->contenu,
             'auteur_nom'=>$agent_trouver->agent->nom,
             'auteur_fonction'=>$agent_trouver->agent->fonction,
            //  'destination'=>$request->destination
        ];

 
         $insert = Message::firstOrCreate($data);
         if(!$insert){
             return back()->with('echec','erreur de sauvegarde');
         }

        $sendMail = new MailController();
        $to=$request->destinateur;
        $object=$insert->object; //"Communiqué N°01/MN/024";
        $contenu=[
            'contenu'=>$insert->contenu,
            'titre'=>$insert->titre
        ];
        
        $envoi = $sendMail->sendMail($to, $object, $contenu);
        if($envoi){
            $messageDestinateur = MessageDestinateur::create([
                'message_id'=>$insert->id,
                'destinateur'=>$to,
                'status'=>true
            ]);
            return back()->with('success','Communiqué envoyé par mail avec success à l adresse '.$to);

        }
        $msg_dest = MessageDestinateur::create(['message_id'=>$insert->id, 'destinateur'=>$to, 'status'=>false]);
        return back()->with('echec','Communiqué enregistré avec success mais non envoyé par mail à l adresse '.$to);
    }

    /**
     * Display the specified resource.
     */
    public function show(Message $message)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Message $message)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMessageRequest $request, Message $message)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Message $message)
    {
        //
    }
}
