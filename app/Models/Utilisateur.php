<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Utilisateur extends Model
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

}
