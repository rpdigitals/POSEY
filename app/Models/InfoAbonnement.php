<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InfoAbonnement extends Model
{
    use HasFactory;
    protected $fillable = [
        'date_abonnement','fin_abonnement','prestataire_id'
    ];
    public function prestataire(){
        return $this->belongsTo('App\Models\Prestataires','prestataire_id');
    }
}
