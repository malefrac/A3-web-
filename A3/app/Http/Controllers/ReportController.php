<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\EnviromentType;
use App\Models\Order;
use App\Models\Technician;
use App\Models\User;
use App\Models\LearningEnviroment;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class ReportController extends Controller
{

      /**
     * Display a listing of the resource.
     */
    public function index()
    {
       return view('reports.index');
    }
    
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
   

    
    /*public function export_users()
    {
        $users = User::all();
        $data = array(
            'users' => $users
        ); 
        $pdf = Pdf::loadView('reports.export_users', $data)->setPaper('letter','portrait');
        return $pdf->download('Users.pdf');
    }*/


   /* public function export_activities_by_technician(Request $request)
    {
        $technician = Technician::where('document', '=', $request['technician_id'])
                    ->first();
        $activities = Activity::where('technician_id', '=' , $request['technician_id'])    
                    ->get();          
        $data = array(
            'courses' => $courses
            ,
            'careers' => $careers
        );

   /* public function export_orders(Request $request)
    {
        $orders = Order::whereBetween('legalization_date', [$request['initial_date'], $request['final_date']])
                ->get();

                $data = array(
                    'initial_date' =>$request['initial_date'],
                    'final_date' =>$request['final_date'],
                    'orders' => $orders
                );

                $pdf = Pdf::loadView('reports.export_order', $data)
                ->setPaper('letter','portrait');
        return $pdf->download('Orders.pdf');
    }*/


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
