<?php

namespace Database\Seeders;

use App\Models\environmet_type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EnvironmetTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        environmet_type::insert([
            ['description'=> 'Aula'],
            ['description'=> 'Taller'],
            ['description'=> 'Laboratorio'],
            ['description'=> 'Aula virtual'],
            ['description'=> 'Auditorio'],
            ['description'=> 'Biblioteca'],
            ['description'=> 'Campo deportivo'],
        ]);
    }
}
