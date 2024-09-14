<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DossierSection extends Model
{
    use HasFactory;
    protected $fillable = ['dossier_id','section_id'];
    
    public function dossier(){
        return $this->belongsTo(Dossier::class);
    }
}
