<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\EnviromentType;
use App\Models\Order;
use App\Models\Technician;
use App\Models\User;
use App\Models\LearningEnviroment;
use App\Models\Course;
use App\Models\Instructor;
use App\Models\LearningEnvironment;
use App\Models\SchedulingEnviroment;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ReportController extends Controller
{
      /**
     * Display a listing of the resource.
     */

    public function export_learning_enviroments()
    {
        
             // $enviroment_types = EnviromentType::all();
            $learnig_enviroments = LearningEnviroment::all();
            $data = array(
            'learning_enviroments' => $learnig_enviroments,
            //'enviroment_types' =>  $enviroment_types 
           );
            $pdf = Pdf::loadView('reports.export_learning_enviroments', $data)->setPaper('letter', 'portrait');
            return $pdf->download('learning_enviroments.pdf');
    
    }


    public function export_scheduling_enviroments_by_course(Request $request)
    {
            $courses = Course::where('id', '=', $request['course_id'])->first();
            $learning_enviroments = LearningEnviroment::all();
            $scheduling_enviroments = SchedulingEnviroment::whereBetween('date_scheduling',[ $request['initial_date'], $request['final_date']])
                    ->where('course_id' , '=' , $request['course_id'])->get();
            $data = array(
                'initial_date' => $request['initial_date'],
                'final_date' => $request['final_date'],
                'courses' => $courses,
                'learning_enviroments' => $learning_enviroments,
                'scheduling_enviroments' => $scheduling_enviroments
                
            );
    
            $pdf = Pdf::loadView('reports.export_scheduling_enviroments_by_course', $data)->setPaper('letter','portrait');
            return $pdf->download('scheduling_enviroments_by_course.pdf');
    }
    
    public function export_scheduling_enviroments_by_instructor(Request $request)
    {
            $instructors = Instructor::where('id', '=', $request['fullname'])->first();
            $learning_enviroments = LearningEnviroment::all();
            $scheduling_enviroments = SchedulingEnviroment::whereBetween('date_scheduling',[ $request['initial_date'], $request['final_date']])
                        ->where('instructor_id' , '=' , $request['instructor_id'])->get();
            $data = array(
                'initial_date' => $request['initial_date'],
                'final_date' => $request['final_date'],
                'instructors' => $instructors,
                'learning_enviroments' => $learning_enviroments,
                'scheduling_enviroments' => $scheduling_enviroments
                
            );
    
            $pdf = Pdf::loadView('reports.export_scheduling_enviroments_by_instructor', $data)->setPaper('letter','portrait');
            return $pdf->download('scheduling_enviroments_by_instructor.pdf');
    }
    

    /**
     * Show the form for creating a new resource.
     */
  /*  public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */

//     public function store(Request $request)
//     {
//         //
//     }

//     /**
//      * Display the specified resource.
//      */
//     public function show(string $id)
//     {
//         //
//     }

//     /**
//      * Show the form for editing the specified resource.
//      */
//     public function edit(string $id)
//     {
//         //
//     }

//     /**
//      * Update the specified resource in storage.
//      */
//     public function update(Request $request, string $id)
//     {
//         //
//     }

//     /**
//      * Remove the specified resource from storage.
//      */
//     public function destroy(string $id)
//     {

//     }

}