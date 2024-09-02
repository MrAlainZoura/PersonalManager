<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departement extends Model
{
    use HasFactory;
    protected $fillable = [
        'libele',
        'description',
        'date_creation',
        'statut',
        'date_fermeture',
        'longitude',
        'latitude'
    ];
}
