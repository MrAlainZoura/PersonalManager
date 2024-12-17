<?php

namespace App\Http\Controllers;

use App\Models\Presence;
use Barryvdh\DomPDF\Facade\PDF;
use App\Jobs\PresenceJob;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\StorePresenceRequest;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Http\Requests\UpdatePresenceRequest;
use App\Http\Controllers\api\PresenceController as ApiPresenceController;

class PresenceController extends Controller implements ShouldQueue
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
                $presence->an=null;
                $presence->mois=null;
                $presence->jour=false;
                $tab[$i] = $presence;
            }  
        }
       
        $groupe = $tab;
        
        return view('presences.index', compact('groupe'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($action)
    {
        return view('presences.create',compact('action'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePresenceRequest $request)
    {
        $validattion = Validator::make($request->all(), [
            'nom'=>'required|string',
            'email'=>'required|email',
        ]);

        $h_arrive0 = Carbon::now();
        $h_arrive = $h_arrive0->format('Y-m-d H:i:s');

        $service_h = Carbon::createFromFormat('H:i','07:00');
        $arrive_serv = Carbon::createFromFormat('H:i',$h_arrive0->format('H:i'));
        // return 'on teste heure';
        if($arrive_serv < $service_h){
            return back()->with('echec',"Le travail commence à 7h");
        }
      
        if($validattion->fails()){
            $message = $validattion->errors();
            return back()->with('echec',$message);
        }

        //recuperer agent à partir de son email et nom via l'api
        $agent = Http::get('http://127.0.0.1:8000/api/agent-show/?email='.$request->email);
        // $agent = Http::get('http://127.0.0.1:8000/api/agent-show/?nom='.$request->nom.'&email='.$request->email);
        //je recupere l'id de service et la localisation 

        if($agent->successful()){
            $agent_trouver = $agent->object();
            if($agent_trouver->success != true){
                return back()->with('echec',"Erreur d'identification de l'agent");
            }
        }else{
            return back()->with('echec',"Erreur vérification de l'agent");
        }
        //verifier si presence existe deja pour ce jour
        $verif_prese = Presence::where('email',$request->email)->where('nom',$agent_trouver->agent->nom)->latest()->first();
        if($verif_prese != null){
            if($verif_prese->count() > 0 ){
                $date = Carbon::parse($verif_prese->h_arrive)->format('Y-m-d');
                $today = $h_arrive0->format('Y-m-d');

                if($date == $today){
                    return back()->with('success',"Signer la sortie et revenez le prochain jour de travail");
                } 
            }
        }
        $service  = Http::get('http://127.0.0.1:8000/api/service/?'.$agent_trouver->agent->service_id);
        
        if ($service->successful()) {
            $service_trouver = $service->object();
            foreach($service_trouver->service as $key=>$val){
                $long=$val->long;
                $lat=$val->lat;
            }
        } else {
                $long=null;
                $lat=null;
        }
        $positionApi = new ApiPresenceController();
        if ($long != null && $lat != null) {
            $position = $positionApi->getPerimetre((float)$long, (float)$lat);
            $confirmation = $position['confirmation'];
            $distance = $position['distance'];
            $long_ag = $position['long_ag'];
            $lat_ag = $position['lat_ag'];
            
        } else {
            $confirmation = false;
            $distance = null;
            $long_ag = null;
            $lat_ag = null;
        }
        $insert = [
            'email'=>$agent_trouver->agent->email,
            'nom'=>$agent_trouver->agent->nom,
            'confirmation'=>$confirmation,
            'long'=>$long_ag,
            'lat'=>$lat_ag,
            'distance'=>$distance,
            'h_arrive'=>$h_arrive,
            'h_sortie'=>null
        ];
        
        $presence = Presence::create($insert);
        if($presence){
            return back()->with('success',"Vous êtes arrivé à $presence->h_arrive $presence->nom");
        }else{
            return back()->with('echec',"Erreur inattendue s'est produite, reessayer");
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($date)
    {
        $presence = Presence::whereYear('h_arrive',$date)->latest()->get();

        $tab= [];
        for($i=1; $i <= 12; $i++){
            $presence = Presence::whereYear('h_arrive',$date)->whereMonth('h_arrive',$i)->get();
            if(count($presence) > 0){
                switch ($i) {
                    case 1:
                        $mois = 'Janvier';
                        break;
                    
                    case 2:
                        $mois="Février";
                        break;
                    
                    case 3:
                        $mois="Mars";
                        break;
                    
                    case 4:
                        $mois="Avril";
                        break;
                    
                    case 5:
                        $mois="Mai";
                        break;
                    
                    case 6:
                        $mois="Juin";
                        break;
                    
                    case 7:
                        $mois="Juillet";
                        break;
                    
                    case 8:
                        $mois="Aout";
                        break;
                    
                    case 9:
                        $mois="Septembre";
                        break;
                    
                    case 10:
                        $mois="Octobre";
                        break;
                    
                    case 11:
                        $mois="Novembre";
                        break;
                    
                    case 12:
                        $mois="Décembre";
                        break;
                    
                    default:
                        # code...
                        break;
                }
                $presence->an=$date;
                $presence->mois=$i;
                $presence->jour=false;
                $tab[$mois] = $presence;
            }
        } 
        // dd($tab);
        $groupe=$tab;
        return view('presences.index', compact('groupe'));
    }

    public function showPresence($an, $mois){
        $presence = Presence::whereYear('h_arrive',$an)->whereMonth('h_arrive',$mois)->get();
        // dd($presence);
        $groupe=[];
        foreach($presence as $key=>$val){
            $element = Carbon::parse($val->h_arrive)->format('Y-m-d');
            // echo $element."<br>";
            if($key==0){

                $groupecle = Presence::where('created_at','like',"%$element%")->get();
                $groupecle->an=null;
                $groupecle->mois=null;
                $groupecle->jour=true;
                $groupe [$element]= $groupecle;
            }
            if($key > 0){
                
                $cle= $key-1;
                $element2 = Carbon::parse($presence[$cle]->h_arrive)->format('Y-m-d');

                if($element != $element2){
                    $groupecle2 = Presence::where('created_at','like',"%$element2%")->get();
                    $groupecle2->an=null;
                    $groupecle2->mois=null;
                    $groupecle2->jour=true;
                    $groupe [$element2]= $groupecle2;

                }
            }
            $dernier = count($presence)-1;
            if($key == $dernier){
                $groupecle = Presence::where('created_at','like',"%$element2%")->get();
                $groupecle->an=null;
                $groupecle->mois=null;
                $groupecle->jour=true;
                $groupe[$element]= $groupecle;
            }
        }

        return view('presences.index', compact('groupe'));

    }
    public function showPresenceJour($date){
        $presence = Presence::where('created_at','like',"%$date%")->get();
        return view('presences.show',compact('presence'));
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Presence $presence)
    {
        //
    }

    public function updateSortier(Request $request){
        $getTimeNow = Carbon::now();
        $now =$getTimeNow->format('Y-m-d H:i:s');
        $today = $getTimeNow->format('Y-m-d');
        $validattion = Validator::make($request->all(), [
            'email'=>'required|email',
        ]);

        if($validattion->fails()){
            $message = $validattion->errors();
            return back()->with('echec',"$message");
        }
        $presence = Presence::where('email',$request->email)->where('h_arrive','like',"%$today%")->latest()->first();
        
        if(!$presence){
            return back()->with('echec',"Priere de signer d'abord la présence d'arrivée avant la sortie");
        }
       
        if($presence->h_sortie != null){
            return back()->with('echec',"Revenez demain pour signer la présence, vous avez déjà signé la sortie pour aujourd'hui");
        }
       
        $update = Presence::where('id',$presence->id)->update(['h_sortie' => $now]);
        if($update){
            return back()->with('success',"Vous êtes sorti à $now $presence->nom");
        }

     }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Presence $presence)
    {
        // dd($request->all());
        $getTimeNow = Carbon::now();
        $now =$getTimeNow->format('Y-m-d H:i:s');//maintenant temps de la requette        
        // return [$today, $now];
        // dd($presence);
        $validattion = Validator::make($request->all(), [
            'id'=>'required|int',
        ]);

        if($validattion->fails()){
            $message = $validattion->errors();
            return back()->with('echec', $message);
        }

        $presence = Presence::find($request->id);
        // return $presence;
        if($presence){
          
            $limite = Carbon::createFromFormat('Y-m-d H:i:s',$presence->h_arrive,'UTC');
            $jourHier = Carbon::createFromFormat('Y-m-d',$limite->format('Y-m-d'),'UTC')->setTime(00,00,00);
            $today = $jourHier->addDay()->addHours(12);

            if($now >= $today){

                return back()->with('echec','Tentative de corruption, dépasser 12h00 la présence ne peut être modifiée');
            }
            // return ["on peut modifier"];
            $update = Presence::where('id',$request->id)->update(['confirmation' => true]);
            if($update){
                
                return back()->with('success',"La présence de $presence->nom a été confirmée avec succès");

            }else{
             
                return back()->with('echec','Une erreur s est produite lors de la confirmation présence');

            }
            }else{
               
                return back()->with('echec','Une erreur s est produite reessayer plus tard');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Presence $presence)
    {
        //
    }

    public function globalPresence(){
 
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
       return view('presences.global', compact('tab'));        
    }

    public function getIntervalDate($date)
    {
        $date_mois = Carbon::parse($date)->format('Y-m-d') ;
        $date_ref = Carbon::createFromFormat('Y-m-d H:i:s', $date);
        $date_ref0 = Carbon::createFromFormat('Y-m-d H:i:s', $date);

        $debut_mois = $date_ref0->startOfMonth();
        $fin_mois = $date_ref0->endOfMonth();

        $debut_semaine = $date_ref0->startOfWeek(Carbon::MONDAY);
        $fin_semaine = $date_ref0->endOfWeek(Carbon::SUNDAY);

        return [
            'debut_semaine'=>Carbon::parse($debut_semaine)->format('Y-m-d') ,
            'fin_semaine'=>Carbon::parse($fin_semaine)->format('Y-m-d'),
            'debut_mois'=>Carbon::parse($debut_mois)->format('Y-m-d'),
            'fin_mois'=>Carbon::parse($fin_mois)->format('Y-m-d')
        ];
    }
}
