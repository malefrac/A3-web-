<?php

namespace App\Http\Controllers;

use App\Models\Career;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CourseController extends Controller
{
    private $rules =[
        'code' =>'required|numeric|max:9999999999',
        'shift' => 'required|string',
        'career_id' => 'numeric',
        'initial_date' => 'required|date|date_format:Y-m-d',
        'final_date' => 'required|date|date_format:Y-m-d',
        'status' => 'required|string'

    ];
    
    private $traductionAttributes = [
        'code' => 'ficha',
        'shift' => 'jornada',
        'career_id' => 'carrera',
        'initial_date' => 'fecha inicial',
        'final_date' => 'fecha final',
        'status' => 'estado',
    ];

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
            return redirect()->route('course.create')->withInput()->withErrors($errors);
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
        $validator = Validator::make($request->all(), $this->rules);
        $validator->setAttributeNames($this->traductionAttributes);
        if($validator->fails())
        {
            $errors = $validator->errors();
            return redirect()->route('course.create' , $id)->withInput()->withErrors($errors);
        }

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
