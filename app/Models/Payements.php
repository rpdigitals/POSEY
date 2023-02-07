<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payements extends Model
{
    use HasFactory;
    protected $fillable = [
        'montant','references','statut','commande_id'
    ];
    public function commande(){
        return $this->belongsTo('App\Models\Commandes','commande_id');
}
}
