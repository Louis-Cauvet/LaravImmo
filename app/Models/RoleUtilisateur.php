<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RoleUtilisateur extends Model
{
    protected $table = 'roles_utilisateurs';
    protected $primaryKey = 'id_role';

    protected $fillable = ['intitule_role'];
}
