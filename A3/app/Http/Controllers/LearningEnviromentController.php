<?php

namespace App\Http\Controllers;

use App\Models\EnviromentType;
use App\Models\LearningEnviroment;
use App\Models\Location;
use Illuminate\Http\Request;

class LearningEnviromentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $learning_enviroments = LearningEnviroment::all();
        return view('learning_enviroment.index', compact('learning_enviroments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $enviroment_types = EnviromentType::all();
        $locations = Location::all();
        $statuss = array(
            ['name' => 'ACTIVO', 'value' => 'ACTIVO'],
            ['name' => 'INACTIVO', 'value' => 'INACTIVO'],
        );

        return view('learning_enviroment.create', compact('enviroment_types', 'locations', 'statuss'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $learning_enviroment = LearningEnviroment::create($request->all());
        session()->flash('message', 'Ambiente de aprendizaje creado exitosamente');
        return redirect()->route('learning_enviroment.index');
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
        $learning_enviroment = LearningEnviroment::find($id);
        if($learning_enviroment)
        {
            $enviroment_types = EnviromentType::all();
            $locations = Location::all();
            $statuss = array(
                ['name' => 'ACTIVO', 'value' => 'ACTIVO'],
                ['name' => 'INACTIVO', 'value' => 'INACTIVO'],
            );
        
            return view('learning_enviroment.edit', compact('learning_enviroment', 'enviroment_types', 'locations', 'statuss'));
        }
    
        session()->flash('warning', 'No se encuentra el ambiente de aprendizaje solicitado');
        return redirect()->route('learning_enviroment.index');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $learning_enviroment = LearningEnviroment::find($id);
        if($learning_enviroment)
        {
            $learning_enviroment->update($request->all());
            session()->flash('message', 'Ambiente de aprendizaje actualizado exitosamente');
        }
        else
        {
            session()->flash('warning', 'No se encuentra el ambiente de aprendizaje solicitado');
        }

        return redirect()->route('learning_enviroment.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $learning_enviroment = LearningEnviroment::find($id);
        if($learning_enviroment)
        {
            $learning_enviroment->delete();
            session()->flash('message', 'Ambiente de aprendizaje eliminado exitosamente');
        }
        else
        {
            session()->flash('warning', 'No se encuentra el ambiente de aprendizaje solicitado');
        }

        return redirect()->route('learning_enviroment.index');
    }
}
