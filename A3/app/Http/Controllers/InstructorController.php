<?php

namespace App\Http\Controllers;

use App\Models\Instructor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class InstructorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $instructors = Instructor::all();
        return view('instructor.index', compact('instructors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $status = array(
            ['name' => 'PLANTA', 'value' => 'PLANTA'],
            ['name' => 'CONTRATISTA', 'value' => 'CONTRATISTA'],
        );

        return view('instructor.create', compact('types'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request['password'] = Hash::make($request['password']);
        $instructor = Instructor::create($request->all());
        session()->flash('message', 'Instructor creado exitosamente');
        return redirect()->route('instructor.index');
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
    public function edit(string $document)
    {
        $instructor = Instructor::find($document);
        if($instructor)
        {
            $status = array(
                ['name' => 'PLANTA', 'value' => 'PLANTA'],
                ['name' => 'CONTRATISTA', 'value' => 'CONTRATISTA'],
            );

            return view('instructor.edit', compact('types'));
        }
    
        session()->flash('warning', 'No se encuentra el instructor solicitado');
        return redirect()->route('instructor.index');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request['password'] = Hash::make($request['password']);
        $instructor = Instructor::find($id);
        if($instructor)
        {
            $instructor->update($request->all()); 
            session()->flash('message', 'Instructor eliminado exitosamente');
        }
        else
        {
            return redirect()->route('instructor.index');
            session()->flash('warning', 'No se encuentra el instructor solicitado');
        }

        return redirect()->route('instructor.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $instructor = Instructor::find($id);
        if($instructor) 
        {
            $instructor->delete(); 
            session()->flash('message','Instructor eliminado exitosamente');
        }
        else 
        {
            session()->flash('warning', 'No se encuentra el instructor solicitado');
        }

        return redirect()->route('instructor.index');
    }
}
