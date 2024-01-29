<?php

namespace Database\Seeders;

use App\Models\EnviromentType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestEnviromentTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      $enviroment_type = new EnviromentType();
      $enviroment_type->description = 'Aula';
      $enviroment_type->save();
    }
}
