<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'postnom',
        'prenom',
        'email',
        'genre',
        'date_naissance',
        'date_engagement',
        'fonction',
        'grade',
        'statut',
        'service_id',
        'role_id',
        'matricule',
        'user_id'
    ];

    public function service (){
        return $this->belongsTo(Service::class);
    }
    public function role(){
        return $this->belongsTo(Role::class);
    }
}
