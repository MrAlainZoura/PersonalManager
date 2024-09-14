<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dossier extends Model
{
    use HasFactory;
    protected $fillable = ['libele'];

    public function document(){
        return $this->hasMany(Document::class);
    }

    public function dossierDepartement(){
        return $this->hasMany(DossierDepartement::class);
    }

    public function dossierSection(){
        return $this->hasMany(DossierSection::class);
    }
    public function dossierAgent(){
        return $this->hasMany(DossierAgent::class);
    }
    
}
