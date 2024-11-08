<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MessageDestinateur extends Model
{
    use HasFactory;
    protected $fillable = [
        'message_id',
        'destinateur',
        'status'
    ];

    public function message(){
        return $this->belongsTo(Message::class);
    }
}
