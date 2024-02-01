<?php

namespace Database\Seeders;

use App\Models\Career;
use App\Models\Course;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestCourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $course = new Course();
        $course->code = 2108090;
        $course ->shift = 'DIURNA';
        
        $career = Career::find(1);
        $course->career_id = $career->id;

        $course->initial_date = '2023-08-15';
        $course->final_date = '2024-10-04';
        $course->status = 'LECTIVA';
        $course->save();
    }
}
