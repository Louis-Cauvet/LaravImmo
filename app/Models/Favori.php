<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favori extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_client',
        'id_bienImmo',
        'date_ajout',
    ];

    // Get the user linked to the favorite
    public function getUtilisateur()
    {
        return $this->belongsTo(Utilisateur::class, 'id_client', 'id_client');
    }

    // Get the property linked to the favorite
    public function getBienImmo()
    {
        return $this->belongsTo(BienImmo::class, 'id_bienImmo', 'id_bienImmo');
    }
}
