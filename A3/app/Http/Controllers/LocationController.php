<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LocationController extends Controller
{

    private $rules =[
        'name' => 'required|string|max:80|min:3',
        'address' => 'required|string|max:80|min:3',
        'status' => 'required|string|max:20|min:3',

  
      ];
  
      private $traductionAttributes = [
          'name' => 'nombre',
          'address' => 'dirección',
          'status' => 'estado'
  
      ];

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $locations = Location::all();
        return view('location.index', compact('locations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    { 
        $status = array(
            ['name' => 'ACTIVO' , 'value' => 'ACTIVO'],
            ['name' => 'INACTIVO' , 'value' => 'INACTIVO'],
        );
        return view('location.create', compact('status'));
        $status = array(
            ['name' => 'ACTIVO' , 'value' => 'ACTIVO'],
            ['name' => 'INACTIVO' , 'value' => 'INACTIVO'],
        );

        return view('location.create', compact('status'));
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
            return redirect()->route('location.create')->withInput()->withErrors($errors);
        }


        $location = Location::create($request->all());
        session()->flash('message', 'Registro creado exitosamente');
        return redirect()->route('location.index');
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
        $location = Location::find($id);
        if($location)
        {
            $status = array(
                ['name' => 'ACTIVO' , 'value' => 'ACTIVO'],
                ['name' => 'INACTIVO' , 'value' => 'INACTIVO'],
            );

            return view('location.edit', compact('location', 'status'));


        }
        return redirect()->route('location.index');
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
            return redirect()->route('location.edit',$id)->withInput()->withErrors($errors);
        }

        $location = Location::find($id);
        if($location)
        {
            $location->update($request->all());
            session()->flash('message', 'Registro actualizado exitosamente ');
        }
        else
        {
            session()->flash('warning', 'No se encuentra el registro solicitado ');
        }
        return redirect()->route('location.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $location = Location::find($id);
        if($location) 
        {
           $location->delete(); 
           session()->flash('message','Registro eliminado exitosamente');
        }
        else
        {
            session()->flash('warning','No se encuentra el registro solicitado');
        }
        return redirect()->route('location.index');
    }
}