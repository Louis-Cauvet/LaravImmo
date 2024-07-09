<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeBien extends Model
{
    protected $table = 'Types_Biens';
    protected $primaryKey = 'id_typeBien';

    protected $fillable = [
        'intitule_type',
    ];


    // Get all the property which have a specific type
    public function getBiensImmo()
    {
        return $this->hasMany(BienImmo::class, 'typeBien_id', 'id_typeBien');
    }
}
