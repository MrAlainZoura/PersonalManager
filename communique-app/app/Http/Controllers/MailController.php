<?php

namespace App\Http\Controllers;

use App\Mail\CommiqueMail;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendMail($to, $object, array $contenu){
        // $to = "a.tshiyanze@gmail.com";
        // $object="Envoi des nudes à damso";
        // $contenu ="Bonjour mr Zoura nous vous esperons en bonne santé. Ceci est un rappl pour vous presenter au bureau demain à 8H pour une reunion d'affaire avec le DG de NolyCorp";

        $send = Mail::to($to)->send(new CommiqueMail($object, $contenu));
        if($send){
            return true;
        }else{
            return false;
        }
        
    }
}
