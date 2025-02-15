<?php

namespace App\Http\Controllers\api;

use App\Models\User;
use App\Models\Agent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AgentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $agent = Agent::all();
        return response()->json([
            'success'=>true,
            'agents'=>$agent
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
            'nom'=>'required|string|min:3|max:255',
            'postnom'=>'required|string|min:3|max:255',
            'prenom'=>'required|string|min:3|max:255',
            'genre'=>'required|string|max:255',
            'date_naissance'=>'required|date',
            'engagement'=>'required|date',
        ]);

        
        if($validattion->fails()){
            return response()->json($validattion->errors());
        }
        $password = Hash::make('0000');
        $createUser = User::firstOrCreate(['email'=>$request->email, 'name'=>$request->nom,'password'=>$password]);
       
        if(!$createUser){
            return response()->json([
                'sucess'=>false,
                'error'=>"Une erreur s'est produite lors de l'enregistrement"
            ]);
        }
        $insert = [
            'user_id'=>$request->user_id,
            'role_id'=>$request->role_id,
            'nom'=>$request->nom,
            'postnom'=>$request->postnom,
            'prenom'=>$request->prenom,
            'genre'=>$request->genre,
            'date_naissance'=>$request->date_naissance,
            'engagement'=>$request->engagement,
            'fonction'=>$request->fonction,
            'grade'=>$request->grave,
            'statut'=>'En activité',
            'service_id'=>$request->service_id,
        ];
        $agent = Agent::create($insert);

        if($agent){
        return response()->json([
            'sucess'=>true,
            'departement'=>$agent
        ]);
    }else{
         return response()->json([
            'sucess'=>false,
        ]);
    }
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        $validattion = Validator::make($request->all(), [
            'email'=>'required|string|email'
        ]);

        
        if($validattion->fails()){
            return response()->json($validattion->errors());
        }
        $email = $request->email;

        $agent = Agent::where('email',$email)->first();
        if ($agent) {
            return response()->json([
                'success'=>true,
                'agent'=>$agent
            ]);
        } else {
            return response()->json([
                'success'=>false,
            ]);
        }
        
    }
    public function getAgentByService(string $id){
        $agents = Agent::where('service_id',$id)->get();
        if(!$agents){
            return response()->json([
                'success'=>false,
                'error'=>'Pas de resultat pour cette demande'
            ]);
        }

         return response()->json([
                'success'=>true,
                'agents'=>$agents
            ]);
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
        $validattion = Validator::make($request->all(), [
            'nom'=>'required|string|min:3|max:255',
            'postnom'=>'required|string|min:3|max:255',
            'prenom'=>'required|string|min:3|max:255',
            'genre'=>'required|string|max:255',
            'date_naissance'=>'required|date',
            'engagement'=>'required|date',
        ]);

        
        if($validattion->fails()){
            return response()->json($validattion->errors());
        }
        $insert = [
            'user_id'=>$request->userid,
            'nom'=>$request->nom,
            'postnom'=>$request->postnom,
            'prenom'=>$request->prenom,
            'genre'=>$request->genre,
            'date_naissance'=>$request->date_naissance,
            'engagement'=>$request->engagement,
            'fonction'=>$request->fonction,
            'grade'=>$request->grave,
            'statut'=>'En activité',
            'service_id'=>$request->service_id,
            'user_id'=>$request->user_id
        ];
        $departement = DB::table('departements')
                ->where('id', $request->id)
                ->update($insert);
        return response()->json([
        'sucess'=>true,
        'departement'=>Agent::findOrFail($request->id)
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $agrnt= Agent::where('id',$id)->delete();
    }
}
