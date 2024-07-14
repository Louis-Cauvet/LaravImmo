<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recherche extends Model
{
    use HasFactory;

    protected $table = 'Recherches';

    protected $primaryKey = 'id_recherche';

    protected $fillable = [
        'date_enregistrement_recherche',
        'id_client',
        'id_typeBien',
        'achat',
        'mots_cles',
        'ville',
        'budget_min',
        'budget_max',
    ];

    // Get the property's type included in the registered search
    public function getTypeBien()
    {
        return $this->belongsTo(TypeBien::class, 'id_typeBien');
    }

    public function getUserId()
    {
        return $this->belongsTo(Utilisateur::class, 'id_client');
    }
}
