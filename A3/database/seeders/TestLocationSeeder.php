<?php

namespace Database\Seeders;

use App\Models\Location;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestLocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $location = new Location();
        $location->name = 'Sagrado Corazon';
        $location->address = 'Cra 25 # 24 - 47';
        $location->status = 'ACTIVO';
        $location->save();

    }
}
