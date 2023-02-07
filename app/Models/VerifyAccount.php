<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VerifyAccount extends Model {
    use HasFactory;
    protected $fillable = [ 'prestataire_id', 'verify_account', 'identity_pic1', 'identity_pic2' ];

    public function prestataire() {
        return $this->belongsTo( Prestataires::Class );
    }
}
