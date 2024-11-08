<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Communique extends Model
{
    use HasFactory;
    protected $fillable = [
        'titre',
        'objet',
        'contenu',
        'auteur_nom',
        'auteur_fonction',
        'concerne',
        'auteur_id'
    ];
}
