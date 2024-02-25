<?php

namespace App\Http\Controllers;

use App\Models\EnviromentType;
use Illuminate\Http\Request;

class EnviromentTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $enviroment_types = EnviromentType::all();
        return view('enviroment_type.index', compact('enviroment_types'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('enviroment_type.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $enviroment_type = EnviromentType::create($request->all());
        session()->flash('message', 'Tipo de ambiente creado exitosamente');
        return redirect()->route('enviroment_type.index');
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
        $enviroment_type = EnviromentType::find($id);
        if($enviroment_type)
        {
            return view('enviroment_type.edit', compact('enviroment_type'));
        }
        else 
        {
            return redirect()->route('enviroment_type.index');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $enviroment_type = EnviromentType::find($id);
        if($enviroment_type)
        {
            $enviroment_type->update($request->all()); 
            session()->flash('message', 'Tipo de ambiente actualizado exitosamente');
        }
        else
        {
            return redirect()->route('enviroment_type.index');
            session()->flash('warning', 'No se encuentra el tipo de ambiente solicitado');

        }

        return redirect()->route('enviroment_type.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $enviroment_type = EnviromentType::find($id);
        if($enviroment_type) 
        {
            $enviroment_type->delete(); 
            session()->flash('message','Tipo de ambiente eliminado exitosamente');
        }
        else 
        {
            session()->flash('warning', 'No se encuentra el tipo de ambiente solicitado');
        }

        return redirect()->route('enviroment_type.index');
    }
}
