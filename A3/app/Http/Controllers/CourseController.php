<?php

namespace App\Http\Controllers;

use App\Models\Career;
use App\Models\Course;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    private $rules = [
        'code' => 'required|string|max:10|min:3',
        'shift' => 'required|numeric|max:255|min:1',
        'carer_id' => 'required|numeric|max:20',
        'initial_date' => 'required|numeric|max:255',
        'final_date' => 'required|numeric|max:255',
        'estatus' => 'required|string|max:255|min:3'
    ];

    private $traductionAttributes = array(
        'code' => 'codigo',
        'shift' => 'jornada',
        'career_id' => 'identificación de carrera',
        'initial_date' => 'fecha inicial',
        'final_date' => 'fecha final',
        'status' => 'estado'
    );

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses = Course::all();
        return view('course.index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $careers = Career::all();
        $statuss = array(
            ['name' => 'LECTIVA', 'value' => 'LECTIVA'],
            ['name' => 'PRODUCTIVA', 'value' => 'PRODUCTIVA'],
            ['name' => 'INDUCCIÓN', 'value' => 'INDUCCIÓN'],
        );
        $shifts = array(
            ['name' => 'DIURNA', 'value' => 'DIURNA'],
            ['name' => 'MIXTA', 'value' => 'MIXTA'],
            ['name' => 'NOCTURNA', 'value' => 'NOCTURNA'],
        );

        return view('course.create', compact('careers', 'statuss', 'shifts'));
    }

    public function generatePdf()
    {
        $courses = Course::all();
        $careers = Career::all()->find('1')->name;


        $data = array(
            'courses' => $courses
            ,
            'careers' => $careers
        );

        $pdf = PDF::loadView('course.pdf', $data)->setPaper('letter', 'portrait');
        return $pdf->download('courses.pdf');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $validator = Validator::make($request->all(), $this->rules);
        $validator->setAttributeNames($this->traductionAttributes);
        if($validator->fails())
        {
            $errors = $validator->errors();
            return redirect()->route('auth.register')->withInput()->withErrors($errors);
        }

        $course = Course::create($request->all());
        session()->flash('message', 'Curso creado exitosamente');
        return redirect()->route('course.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $course = Course::find($id);
        if($course)
        {
            $careers = Career::all();
            $statuss = array(
                ['name' => 'LECTIVA', 'value' => 'LECTIVA'],
                ['name' => 'PRODUCTIVA', 'value' => 'PRODUCTIVA'],
                ['name' => 'INDUCCIÓN', 'value' => 'INDUCCIÓN'],
            );
            $shifts = array(
                ['name' => 'DIURNA', 'value' => 'DIURNA'],
                ['name' => 'MIXTA', 'value' => 'MIXTA'],
                ['name' => 'NOCTURNA', 'value' => 'NOCTURNA'],
            );
        
            return view('course.edit', compact('course', 'careers', 'statuss', 'shifts'));
        }
    
        session()->flash('warning', 'No se encuentra el curso solicitado');
        return redirect()->route('course.index');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $course = Course::find($id);
        if($course)
        {
            $course->update($request->all());
            session()->flash('message', 'Curso actualizado exitosamente');
        }
        else
        {
            session()->flash('warning', 'No se encuentra el curso solicitado');
        }

        return redirect()->route('course.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $course = Course::find($id);
        if($course)
        {
            $course->delete();
            session()->flash('message', 'Curso eliminado exitosamente');
        }
        else
        {
            session()->flash('warning', 'No se encuentra el curso solicitado');
        }

        return redirect()->route('course.index');
    }
}
