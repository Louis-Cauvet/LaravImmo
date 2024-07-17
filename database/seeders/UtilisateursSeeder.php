<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class UtilisateursSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('Utilisateurs')->insert([
            [
                'prenom' => 'Admin',
                'nom' => 'n°1',
                'email' => 'admin@laravimmo.com',
                'telephone' => '0789756498',
                'mot_de_passe' => Hash::make('admin123!'),
                'role_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'prenom' => 'Zoé',
                'nom' => 'Burghardt',
                'email' => 'z.burghardt@gmail.com',
                'telephone' => '0784691335',
                'mot_de_passe' => Hash::make('Karamel2323!'),
                'role_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'prenom' => 'Thomas',
                'nom' => 'Berthelot',
                'email' => 'tberthelot1@gmail.com',
                'telephone' => '0715846680',
                'mot_de_passe' => Hash::make('Kouid80ah;'),
                'role_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'prenom' => 'Alexandra',
                'nom' => 'Oliver',
                'email' => 'aoliver@gmail.com',
                'telephone' => '0851493780',
                'mot_de_passe' => Hash::make('Couscous8:7'),
                'role_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'prenom' => 'Léo',
                'nom' => 'Domenge',
                'email' => 'domdom@gmail.com',
                'telephone' => '0691758254',
                'mot_de_passe' => Hash::make('Mocjiahha80r!'),
                'role_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'prenom' => 'Manon',
                'nom' => 'Salmon',
                'email' => 's.manon@edf.com',
                'telephone' => '0782456981',
                'mot_de_passe' => Hash::make('Mbappe10d8?'),
                'role_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ]);
    }
}
