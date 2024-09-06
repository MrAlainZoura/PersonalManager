<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'libele',
        'agent_id'
    ];

    public function agent(){
        return $this->hasMany(Agent::class);
    }
}
