<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Presence;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Validator;

class PresenceController extends Controller
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
        $validattion = Validator::make($request->all(), [
            'nom'=>'required|string',
            'email'=>'required|email'
        ]);

        
        if($validattion->fails()){
            $message = $validattion->errors();
            return back()->with('echec', $message);
        }
        //recuperer agent à partir de son email et nom via l'api
        $agent = {};
        //je recupere l'id de service et la localisation 
        
        $service = "$agent->service_id element de recherche";
        $lon="$service lon";
        $lat="$service lat";
        
        $position = $this->getPerimetre($lon, $lat);
        if($position){
            $confirmation = $position['confirmation'];
            $distance = $position['distance'];
            $long_ag = $position['long_ag'];
            $lat_ag = $position['lat_ag'];
        }

        $insert = [
            'email'=>$agent->email,
            'nom'=>$agent->nom,
            'confirmation'=>$confirmation,
            'long'=>$long_ag,
            'lat'=>$lat_ag,
            'distance'=>$distance
        ];

        $presence = Presence::create($insert);
        if($presence){
            
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
        $ip = Http::get('https://api.ipify.org');
        $url = "http://ip-api.com/json/".$ip;

        $agent = Http::get($url);

        if($agent->successful()){

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
                    'confirmation'=>false
                ];
                return $data;
            }
        }

    }
}
