<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DossierDepartement extends Model
{
    use HasFactory;
    protected $fillable = ['departement_id','dossier_id'];
    
    public function dossier(){
        return $this->belongsTo(Dossier::class);
    }
}
