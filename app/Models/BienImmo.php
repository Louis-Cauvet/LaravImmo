<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BienImmo extends Model
{
    use HasFactory;

    protected $table = 'BienImmo';
    protected $primaryKey = 'id_bienImmo';

    protected $fillable = [
        'titre_annonce', 'contenu_annonce', 'prix', 'adresse', 'ville',
        'code_postal', 'surface', 'nb_pieces', 'nb_chambres', 'nb_sdb',
        'achat', 'neuf', 'garage', 'terrain', 'disponible',
    ];


    // Get all the images lied to a property
    public function getImages()
    {
        return $this->hasMany(Image::class, 'id_bien');
    }
}
