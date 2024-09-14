<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DossierAgent extends Model
{
    use HasFactory;
    protected $fillable = ['agent_id','dossier_id'];
    
    public function dossier(){
        return $this->belongsTo(Dossier::class);
    }

}
