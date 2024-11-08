<?php

namespace App\Http\Controllers\api;

use Carbon\Carbon;
use App\Models\Presence;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;

class PresenceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $presence = Presence::latest()->get();
        return response()->json([
            'success'=>true,
            'presences'=>$presence
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
            return response()->json([
                'error'=>"Le service ne commence pas avant 7H",
                'success'=>false
            ]);
        }
      
        if($validattion->fails()){
            $message = $validattion->errors();
            return response()->json(['error'=>$message]);
        }

        //recuperer agent à partir de son email et nom via l'api
        $agent = Http::get('http://127.0.0.1:8000/api/agent-show/?email='.$request->email);
        // $agent = Http::get('http://127.0.0.1:8000/api/agent-show/?nom='.$request->nom.'&email='.$request->email);
        //je recupere l'id de service et la localisation 
// return "ici";
        if($agent->successful()){
            $agent_trouver = $agent->object();
            
            if($agent_trouver->success != true){
                
                return response()->json([
                    'error'=>"Erreur d'identification de l'agent",
                    'success'=>false
                ]);
            }
        }else{

            return response()->json([
                'error'=>"Erreur d'identification de l'agent",
                'success'=>false
            ]);
        }
        // return $agent_trouver;
        //verifier si presence existe deja pour ce jour
        $verif_prese = Presence::where('email',$request->email)->where('nom',$request->nom)->latest()->first();
      
        if($verif_prese != null)
         {   if($verif_prese->count() > 0){
                $date = Carbon::parse($verif_prese->h_arrive)->format('Y-m-d');
                $today = $h_arrive0->format('Y-m-d');

                if($date == $today){
                    return response()->json([
                        'success'=>true,
                        'message'=>'Signer la sortie et revenez le prochain jour de travail'
                    ]);
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
        
        if ($long != null && $lat != null) {
            $position = $this->getPerimetre((float)$long, (float)$lat);
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
            return response()->json([
                'success'=>true,
                'presence'=>$presence
            ]);
        }else{
            return response()->json([
                'success'=>false,
                'message'=>'Erreur lors de sauvegarde'
            ]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return response()->json(['success'=>true]);
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

     public function updateSortie(Request $request){
        $getTimeNow = Carbon::now();
        $now =$getTimeNow->format('Y-m-d H:i:s');

        $validattion = Validator::make($request->all(), [
            'id'=>'required|int',
        ]);

        if($validattion->fails()){
            $message = $validattion->errors();
            return response()->json(['error'=>$message]);
        }
        $presence = Presence::where('id',$request->id)->first();

        if(!$presence){
            return response()->json([
                'success'=>false,
                'error'=>'Une erreur s est produite rvenez plus tard',
            ]);
        }
        if($presence->h_sortie != null){
            return response()->json([
                'success'=>false,
                'error'=>'Revenez demain pour signer la présence, vous avez déjà signé la sortie pour aujourd hui',
            ]);
        }
        $limite = Carbon::createFromFormat('Y-m-d H:i:s',$presence->h_arrive,'UTC');
        $jourHier = Carbon::createFromFormat('Y-m-d',$limite->format('Y-m-d'),'UTC')->setTime(23,00,00);

        if($now >= $jourHier){
            return response()->json([
                'success'=>false,
                'error'=>'Le temps est dépassé',
            ]);
        }
        $update = Presence::where('id',$request->id)->update(['h_sortie' => $now]);
        if($update){
            return response()->json([
                'success'=>true,
                'message'=>'Sortie enregistrée avec success',
                'presence'=>Presence::find($presence->id)
            ]);
        }else{
            return response()->json([
                'success'=>false,
                'error'=>'Une erreur s est produite lors de la mise à jour de cette présence',
            ]);
        }


     }
    public function update(Request $request)
    {          
        $getTimeNow = Carbon::now();
        $now =$getTimeNow->format('Y-m-d H:i:s');//maintenant temps de la requette        
        // return [$today, $now];

        $validattion = Validator::make($request->all(), [
            'id'=>'required|int',
        ]);

        if($validattion->fails()){
            $message = $validattion->errors();
            return response()->json(['error'=>$message]);
        }

        $presence = Presence::find($request->id);
        // return $presence;
        if($presence){
          
            $limite = Carbon::createFromFormat('Y-m-d H:i:s',$presence->h_arrive,'UTC');
            $jourHier = Carbon::createFromFormat('Y-m-d',$limite->format('Y-m-d'),'UTC')->setTime(00,00,00);
            $today = $jourHier->addDay()->addHours(12);

            if($now >= $today){
                return response()->json([
                    'success'=>false,
                    'error'=>'Tentative de corruption, dépasser 12h00 la présence ne peut être modifiée'
                ]);
            }
            // return ["on peut modifier"];
            $update = Presence::where('id',$request->id)->update(['confirmation' => true]);
            if($update){
                return response()->json([
                    'success'=>true,
                    'message'=>'Présence mise à jour avec success',
                    'presence'=>$presence
                ]);
            }else{
                return response()->json([
                    'success'=>false,
                    'error'=>'Une erreur s est produite lors de la mise à jour de cette présence',
                ]);
            }
            }else{
            return response()->json([
                'success'=>false,
                'error'=>'Une erreur s est produite reessayer plus tard'
                
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    private function calculDistance ($xCenter, $yCenter, $xUser, $yUser){
        $diff = $yCenter - $yUser;
        $distance = sin(deg2rad($xCenter))*sin(deg2rad($xUser)) 
                    + cos(deg2rad($xCenter))*cos(deg2rad($xUser))*cos(deg2rad($diff));
        
        $distance = acos($distance);
        $distance = rad2deg($distance);
        
        $km = $distance * 60 * 1.1515;
        $mettres = $km *1609.39;

        return $mettres;
    }
    public function getPerimetre($long, $lat){

        $coord_bureau = ["long"=>$long, "lat"=>$lat];

        $data = [
            'message'=>'il n est pas dans le perimetre',
            'distance'=>null,
            'confirmation'=>false,
            'long_ag'=>null,
            'lat_ag'=>null,
        ];

        $ip = Http::timeout(30)->get('https://api.ipify.org');

        if(!$ip->successful()){
            return $data;
        }

        $url = "http://ip-api.com/json/".$ip;
        $agent = Http::timeout(30)->get($url);

        if(!$agent->successful()){
            return $data;
        }

        if($agent->successful() AND $ip->successful()){

            $localisation = $agent->object();

            $lattitude = $localisation->lat;
            $longititude = $localisation->lon;

            $rayon = 10; //Rayon de 10m autour du bureau
            $distance = $this->calculDistance($coord_bureau['lat'],$coord_bureau['long'],$lattitude,$longititude);
        
            if($distance <= $rayon){
               $data = [
                    'message'=>'il est dans le perimetre',
                    'long_ag'=>$longititude,
                    'lat_ag'=>$lattitude,
                    'distance'=>$distance,
                    'confirmation'=>true
                ];
                 return $data;
            }else{
                $data = [
                    'message'=>'il n est pas dans le perimetre',
                    'distance'=>$distance,
                    'confirmation'=>false,
                    'long_ag'=>$longititude,
                    'lat_ag'=>$lattitude,
                ];
                return $data;
            }
        }

    }
}
