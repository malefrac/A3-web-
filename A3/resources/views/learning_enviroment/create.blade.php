@extends('templates.base')
@section('title', 'Crear ambiente de aprendizaje')
@section('header', 'Crear ambiente de aprendizaje')
@section('content')
    @include('templates.messages')
    <div class="row">
        <div class="col-lg-12 mb-4">
            <form action="#" method="POST">
                @csrf
                <div class="row form-group">
                    <div class="col-lg-12 mb-4">
                        <label for="name">Nombre</label>
                        <input type="text" class="form-control"
                        id="name" name="name" required>    
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-lg-6 mb-4">
                        <label for="capacity">Capacidad</label>
                        <input type="number" class="form-control"
                        id="capacity" name="capacity" required>    
                    </div>
                    <div class="col-lg-6 mb-4">
                        <label for="area_mt2">Area en mt2</label>
                        <input type="number" class="form-control"
                        id="area_mt2" name="area_mt2" required>    
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col-lg-6 mb-4">
                        <label for="floor">Piso</label>
                        <input type="number" class="form-control"
                        id="floor" name="floor" required>    
                    </div>
                    <div class="col-lg-6 mb-4">
                        <label for="inventory">Inventario</label>
                        <input type="text" class="form-control"
                        id="inventory" name="inventory" required>    
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col-lg-6 mb-4">
                        <label for="type_id">Tipo</label>
                        <select name="type_id" id="type_id"
                            class="form-control" required>
                            <option value="">Seleccionar</option>
                        </select> 
                    </div>
                    <div class="col-lg-6 mb-4">
                        <label for="location_id">Locacion</label>
                        <select name="location_id" id="location_id"
                            class="form-control" required>
                            <option value="">Seleccionar</option>
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
                        <a href="{{ route('learning_enviroment.index') }}" class="btn btn-secondary btn-block">
                            Cancelar
                        </a> 
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

