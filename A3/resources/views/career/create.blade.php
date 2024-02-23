@extends('templates.base')
@section('title', 'Crear carrera')
@section('header', 'Crear carrera')
@section('content')
    @include('templates.messages')
    <div class="row">
        <div class="col-lg-12 mb-4">
            <form action="{{ route('career.store') }}" method="POST">
                @csrf
                <div class="row form-group">
                    <div class="col-lg-6 mb-4">
                        <label for="name">Nombre</label>
                        <input type="text" class="form-control"
                        id="name" name="name" required>    
                    </div>
                    <div class="col-lg-6 mb-4">
                        <label for="type">Tipo</label>
                        <select name="type" id="type"
                        class="form-control" required>
                        <option value="Seleccionar">Seleccionar</option>
                        <option value="Lectiva">Técnico</option>
                        <option value="Productiva">Tecnólogo</option>
                        </select>   
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-lg-6 mb-4">
                        <button class="btn btn-primary btn-block" type="submit">
                            Guardar
                        </button>                        
                    </div>
                    <div class="col-lg-6 mb-4">
                        <a href="{{ route('career.index') }}" class="btn btn-secondary btn-block">
                            Cancelar
                        </a> 
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection



