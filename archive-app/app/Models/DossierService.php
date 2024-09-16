<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DossierService extends Model
{
    use HasFactory;
    protected $fillable = ['serviceid', 'dossier_id'];

    public function dossier(){
        return $this->belongsTo(Dossier::class);
    }
}
