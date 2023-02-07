<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Clients;
use App\Models\Prestataires;
use App\Models\PorteFeuilles;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Laratrust\Traits\LaratrustUserTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable {
    use LaratrustUserTrait;
    use HasApiTokens, HasFactory, Notifiable;

    /**
    * The attributes that are mass assignable.
    *
    * @var array<int, string>
    */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
    * The attributes that should be hidden for serialization.
    *
    * @var array<int, string>
    */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
    * The attributes that should be cast.
    *
    * @var array<string, string>
    */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function porte_feuille() {
        return PorteFeuilles::where( 'user_id', $this->id )->first();
    }

    public function client() {
        return Clients::where( 'user_id', $this->id )->first();
    }

    public function prestataire() {
        return Prestataires::where( 'user_id', $this->id )->first();
    }

    public function this_prestataire() {
        // fonction utilisée uniquement dans le controlleur provider account controller

        return Prestataires::where( 'user_id', $this->id )->first();
    }

    public function this_client() {
        // fonction utilisée uniquement dans le controlleur user account controller

        return Clients::where( 'user_id', $this->id )->first();
    }

    public function telephone() {
        if ( Prestataires::where( 'user_id', $this->id )->first() ) {
            return Prestataires::where( 'user_id', $this->id )->first()->telephone;
        } else {
            return Clients::where( 'user_id', $this->id )->first()->telephone;
        }

    }

    public function photo() {
        if ( Prestataires::where( 'user_id', $this->id )->first() ) {
            return Prestataires::where( 'user_id', $this->id )->first()->photo;
        } else {
            return Clients::where( 'user_id', $this->id )->first()->photo;
        }

    }

}
