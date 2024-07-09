<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BienImmo extends Model
{
    use HasFactory;

    protected $table = 'Biens_Immo';
    protected $primaryKey = 'id_bienImmo';

    protected $fillable = [
        'typeBien_id', 'titre_annonce', 'contenu_annonce', 'prix', 'adresse', 'ville',
        'code_postal', 'surface', 'nb_pieces', 'nb_chambres', 'nb_sdb',
        'achat', 'neuf', 'garage', 'terrain', 'disponible',
    ];


    // Get all the images lied to a property
    public function getImages()
    {
        return $this->hasMany(Image::class, 'id_bien');
    }

    // Get the property's type
    public function getTypeBien()
    {
        return $this->belongsTo(TypeBien::class, 'typeBien_id', 'id_typeBien');
    }
}
