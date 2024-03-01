<?php

namespace App\Http\Controllers;

use App\Models\Career;
use App\Models\Course;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CareerController extends Controller

{
    private $rules =[
      'name' => 'required|string|max:80|min:3',
      'type' => 'required|string|max:15|min:3'

    ];

    private $traductionAttributes = [
        'name' => 'nombre',
        'type' => 'tipo'

    ];

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $careers = Career ::all(); 
        return view('career.index', compact('careers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $types = array(
            ['name' => 'TECNICO' , 'value' => 'TECNICO'],
            ['name' => 'TEGNOLOGO' , 'value' => 'TEGNOLOGO'],
            ['name' => 'CURSO CORTO' , 'value' => 'CURSO CORTO'],
        );

        return view('career.create', compact( 'types'));
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
            return redirect()->route('career.create')->withInput()->withErrors($errors);
        }

        $career = Career::create($request->all());
        session()->flash('message','Registro creado exitosamente');
        return redirect()->route('career.index');
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
        $career = Career::find($id);
        if($career)
        {
            $types = array(
                ['name' => 'TECNICO' , 'value' => 'TECNICO'],
                ['name' => 'TEGNOLOGO' , 'value' => 'TEGNOLOGO'],
                ['name' => 'CURSO CORTO' , 'value' => 'CURSO CORTO'],
            );
            return view('career.edit', compact('career' , 'types'));
        }
        
        return redirect()->route('career.index');
        
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
            return redirect()->route('career.edit',$id)->withInput()->withErrors($errors);
        }

        $career = Career::find($id);
        if($career)
        {
            $career->update($request->all()); 
            session()->flash('message','Registro actualizado exitosamente');
        }
        else
        {
            session()->flash('warning','No se encuentra el registro solicitado');
        }
        return redirect()->route('career.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $career = Career::find($id);
        if($career)
        {
            $career->delete();
            session()->flash('message','Registro eliminado exitosamente');
        }
        else
        {
            session()->flash('warning','No se encuentra el registro solicitado');
        }
        return redirect()->route('career.index');
    }
}