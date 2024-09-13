<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;
    protected $fillable = [
        'titre',
        'object',
        'contenu',
        'auteur_nom',
        'auteur_fonction'
    ];

    public function messageDestinateur(){
        return $this->hasMany(MessageDestinateur::class);
    }
}
