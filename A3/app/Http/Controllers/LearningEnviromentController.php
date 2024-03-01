<?php

namespace App\Http\Controllers;

use App\Models\EnviromentType;
use App\Models\LearningEnviroment;
use App\Models\Location;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class LearningEnviromentController extends Controller
{
    private $rules =[
       
        'name' =>'required|string|max:50|min:3',
        'capacity' => 'numeric|max:9999999999',
        'area_mt2' => 'numeric|max:9999999999',
        'floor' => 'required|string|max:1',
        'inventory' => 'string|max:150',
        'type_id' => 'numeric',
        'location_id' => 'numeric',
        'status' => 'string|max:20|min:5'


    ];
    private $traductionAttributes = [

        'name' => 'nombre',
        'capacity' => 'capacidad',
        'area_mt2' => 'area_mt2',
        'floor' => 'piso',
        'inventory' => 'inventario',
        'type_id' => 'tipo',
        'location_id' => 'ubicación',
        'status' => 'estado'
    ];

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
        $validator = Validator::make($request->all(), $this->rules);
        $validator->setAttributeNames($this->traductionAttributes);
        if($validator->fails())
        {
            $errors = $validator->errors();
            return redirect()->route('learning_enviroment.create')->withInput()->withErrors($errors);
        }

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
        $validator = Validator::make($request->all(), $this->rules);
        $validator->setAttributeNames($this->traductionAttributes);
        if($validator->fails())
        {
            $errors = $validator->errors();
            return redirect()->route('learning_enviroment.edit', $id)->withInput()->withErrors($errors);
        }

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
