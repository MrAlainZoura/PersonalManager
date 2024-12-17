<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visiteur extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'email',
        'tel',
        'prove,nance',
        'motif',
        'h_arrive',
        'h_retour'
    ];
}
