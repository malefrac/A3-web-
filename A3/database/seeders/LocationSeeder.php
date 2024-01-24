<?php

namespace Database\Seeders;

use App\Models\location;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        location::insert([
        ['description'=> 'Sagrado corazón', 'address' => 'Cra 25 #24-47', 'status' => 'Activo'],
        ['description'=> 'Colegio Salesiano', 'address' => 'Cl. 34 #Cra26', 'status' => 'Activo'],
        ['description'=> 'Clem', 'address' => 'Km/2 vía Tuluá - Buga ', 'status' => 'Inactivo'],
        ]);
    }
}
