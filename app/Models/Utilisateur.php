<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;

class Utilisateur extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'prenom',
        'nom',
        'telephone',
        'email',
        'mot_de_passe',
        'role_id',
    ];

    protected $hidden = [
        'mot_de_passe',
    ];
}
