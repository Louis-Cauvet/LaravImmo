<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DemandeContact extends Model
{
    use HasFactory;

    protected $table = 'Demandes_contact';

    protected $primaryKey = 'id_demande';

    protected $fillable = [
        'nom_demandeur',
        'prenom_demandeur',
        'mail_demandeur',
        'contenu_demande',
        'id_bienImmo',
    ];

    // Get the property lied to the contact request
    public function getBienImmo()
    {
        return $this->belongsTo(BienImmo::class, 'id_bienImmo');
    }
}
