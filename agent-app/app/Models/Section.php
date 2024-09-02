<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;
    protected $fillable = [
        'libele',
        'description',
        'date_creation',
        'statut',
        'date_fermeture',
        'longitude',
        'latitude',
        'departement_id'
    ];
    public function departement(){
        return $this->belongsTo(Departement::class);
    }
}
