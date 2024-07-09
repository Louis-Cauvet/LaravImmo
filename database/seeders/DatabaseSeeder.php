<?php

namespace Database\Seeders;

use App\Models\BienImmo;
use App\Models\Utilisateur;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        /** Insert default datas for tables */
        $this->call([
            TypeBienSeeder::class,
            RolesUtilisateursSeeder::class,
            BienImmoSeeder::class,
            UtilisateursSeeder::class,
        ]);
    }
}
