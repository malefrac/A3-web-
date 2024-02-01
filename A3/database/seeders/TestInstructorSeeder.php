<?php

namespace Database\Seeders;

use App\Models\Instructor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestInstructorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
            $instructor = new Instructor();
            $instructor->document = '1005091887';
            $instructor->fullname = 'Andres Felipe Escobar';
            $instructor->sena_email = 'anfeles@sena.edu.co';
            $instructor->personal_email = 'anfeles@gmail.co';
            $instructor->phone = '3201568921';
            $instructor->password = 'password';
            $instructor->type = 'Planta';
            $instructor->profile = 'Programador';
            $instructor->save();   
        
    }
}
