<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $fillable = [
        'libele',
        'description',
        'date_creation',
        'statut',
        'date_fermeture',
        'section_id'
    ];
    public function section(){
        return $this->belongsTo(Section::class);
    }
    public function agent(){
        return $this->hasMany(Agent::class);
    }
}
