<?php

namespace App\Http\Controllers;

use App\Models\Instructor;
use App\Models\SchedulingEnviroment;
use Illuminate\Http\Request;

class InstructorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $instructors = Instructor ::all(); //select * from causal
        //dd($causals);
        return view('instructor.index', compact('instructors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('instructor.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $instructor = Instructor::where('document', '=', $request->document)
            ->first();
        if ($instructor) {
            session()->flash('error', 'Ya existe un instructor con ese documento');
            return redirect()->route('instructor.create');
        }
        $instructor = Instructor::create($request->all());
        session()->flash('message', 'Registro creado exitosamente');
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
    public function edit(string $id)
    {
        $instructor = Instructor::find($id);
        if($instructor)
        {
            return view('instructor.edit', compact('instructor'));
        }
        else
        {
            return redirect()->route('instructor.index');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $document)
    {
        $instructor = Instructor::where('document', '=', $document)
            ->first();
        if ($instructor) {

            $instructor->fullname = $request->fullname;
            $instructor->phone = $request->phone;
            $instructor->save();
            session()->flash('message', 'Registro actualizado exitosamente');
        } else {
            session()->flash('warning', 'No se encuentra el registro solicitado');
        }

        return redirect()->route('instructor.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $instructor = Instructor::find($id);
        if($instructor)//si la causal exite
        {
            $instructor->delete(); //delete from causal where id = x
            session()->flash('message','Registro eliminado exitosamente');
        }
        else//si la causal no existe
        {
            session()->flash('warning','No se encuentra el registro solicitado');
        }
        return redirect()->route('instructor.index');
    }

}
