<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clients extends Model {
    use HasFactory;
    protected $fillable = [
        'nom', 'prenom', 'telephone', 'photo', 'user_id'
    ];

    public function user() {
        return $this->belongsTo( 'App\Models\User', 'user_id' );
    }

    public function commandes() {
        return $this->belongsTo( 'App\Models\Commandes' );
    }
}
