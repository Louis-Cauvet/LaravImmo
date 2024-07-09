<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $table = 'Images';
    protected $primaryKey = 'id_image';

    protected $fillable = ['id_bien', 'image_path'];


    // Get the property lied to each image
    public function getBienImmo() {
        return $this->belongsTo(BienImmo::class, 'id_bien', 'id_bienImmo');
    }
}
