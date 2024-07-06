<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class UtilisateursSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('Utilisateurs')->insert([
            'prenom' => 'Admin',
            'nom' => 'n°1',
            'email' => 'admin@laravimmo.com',
            'telephone' => '0789756498',
            'mot_de_passe' => 'admin123!',
            'role_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
