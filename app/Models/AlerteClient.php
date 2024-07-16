<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlerteClient extends Model
{
    use HasFactory;

    protected $table = 'Alertes_clients';
    protected $primaryKey = 'id_alerte';
    protected $fillable = ['id_client', 'titre_alerte', 'contenu_alerte'];
}
