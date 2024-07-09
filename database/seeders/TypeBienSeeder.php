<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeBienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('Types_Biens')->insert([
            ['intitule_type' => 'maison'],
            ['intitule_type' => 'appartement'],
            ['intitule_type' => 'terrain'],
        ]);
    }
}
