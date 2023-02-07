<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Services;

class Notations extends Model {
    use HasFactory;
    protected $fillable = [
        'client_id', 'service_id', 'evaluation'
    ];

    public function client() {
        return $this->belongsTo( 'App\Models\Clients', 'client_id' );
    }

    public function service() {
        return $this->belongsTo( 'App\Models\Services', 'service_id' );
    }
}
