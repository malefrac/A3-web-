<?php

namespace Database\Seeders;

use App\Models\Career;
use App\Models\Course;
use App\Models\EnviromentType;
use App\Models\LearningEnviroment;
use App\Models\Location;
use App\Models\SchedulingEnviroment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestLearningEnviromentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $learning_enviroment = new LearningEnviroment();
        $learning_enviroment ->name = 'Aula 205';
        $learning_enviroment->capacity = 30;
        $learning_enviroment->area_mt2 = 30;
        $learning_enviroment->floor = '2';
        $learning_enviroment->inventory = '1 tv, 1 tablero, 30 pc';

        $enviroment_type = EnviromentType::find(1);
        $learning_enviroment->type_id = $enviroment_type->id;
        $location = Location::find(1);
        $learning_enviroment->location_id = $location->id;

        $learning_enviroment->status = 'ACTIVO'; 
        $learning_enviroment->save();
    }
}