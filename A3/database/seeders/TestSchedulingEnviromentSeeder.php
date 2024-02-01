<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Instructor;
use App\Models\LearningEnviroment;
use App\Models\SchedulingEnviroment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestSchedulingEnviromentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $scheduling_enviroment = new SchedulingEnviroment();
        
        $course = Course::find(1);
        $scheduling_enviroment->course_id = $course->id;
        
        $instructor = Instructor::find(1);
        $scheduling_enviroment->instructor_id = $instructor->id;

        $scheduling_enviroment->date_scheduling = '2024-01-30';
        $scheduling_enviroment->initial_hour = '08:00';
        $scheduling_enviroment->final_hour = '12:00';

        $learning_enviroment = LearningEnviroment::find(1);
        $scheduling_enviroment->enviroment_id = $learning_enviroment->id;
        $scheduling_enviroment->save();
        
    }
}
