<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PorteFeuilles extends Model {
    use HasFactory;
    protected $fillable = [ 'valeur', 'dernier_ajout', 'user_id' ];

    public function user() {
        return $this->belongsTo( User::class );
    }
}
