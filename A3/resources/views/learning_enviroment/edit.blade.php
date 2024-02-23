@extends('templates.base')
@section('title', 'Editar ambiente de aprendizaje')
@section('header', 'Editar ambiente de aprendizaje')
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
                    @extends('templates.base')
                    @section('title', 'Editar ambiente de aprendizaje')
                    @section('header', 'Editar ambiente de aprendizaje')
                    @section('content')
                        @include('templates.messages')
                        <div class="row">
                            <div class="col-lg-12 mb-4">
                                <form action="{{ route('learning_enviroment.update', $learning_enviroment['id']) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="row form-group">
                                        <div class="col-lg-4 mb-4">
                                            <label for="name">Nombre</label>
                                            <input type="text" class="form-control"
                                            id="name" name="name" required
                                            value={{ $learning_enviroment['name'] }}>    
                                        </div>
                                        <div class="col-lg-4 mb-4">
                                            <label for="capacity">Capacidad</label>
                                            <input type="number" class="form-control"
                                            id="capacity" name="capacity" required
                                            value={{ $learning_enviroment['capacity'] }}>    
                                        </div>
                                        <div class="col-lg-4 mb-4">
                                            <label for="area_mt2">Area en mt2</label>
                                            <input type="number" class="form-control"
                                            id="area_mt2" name="area_mt2" required
                                            value={{ $learning_enviroment['area_mt2'] }}>    
                                        </div>
                                    </div>
                    
                                    <div class="row form-group">
                                        <div class="col-lg-4 mb-4">
                                            <label for="floor">Piso</label>
                                            <input type="number" class="form-control"
                                            id="floor" name="floor" required
                                            value={{ $learning_enviroment['floor'] }}>    
                                        </div>
                                        <div class="col-lg-4 mb-4">
                                            <label for="inventory">Inventario</label>
                                            <input type="text" class="form-control"
                                            id="inventory" name="inventory" required
                                            value={{ $learning_enviroment['inventory'] }}>    
                                        </div>
                                        <div class="col-lg-4 mb-4">
                                            <label for="type_id">Tipo</label>
                                            <select name="type_id" id="type_id"
                                                class="form-control" required>
                                                <option value="">Seleccionar</option>
                                                @foreach ($enviroment_types as $enviroment_type)
                                                    <option value="{{ $enviroment_type['id'] }}"
                                                    @if($enviroment_type['id'] == $learning_enviroment['type_id']) selected @endif>
                                                    {{ $enviroment_type['description'] }}
                                                </option>
                                            @endforeach
                                            </select> 
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-lg-6 mb-4">
                                            <label for="location_id">Locacion</label>
                                            <select name="location_id" id="location_id"
                                                class="form-control" required>
                                                @foreach ($locations as $location)
                                                <option value="{{ $location['id'] }}"
                                                    @if($location['id'] == $learning_enviroment['location_id']) selected @endif>
                                                    {{ $location['name'] }}
                                                </option>
                                                @endforeach
                                            </select>    
                                        </div>
                                        <div class="col-lg-6 mb-4">
                                            <label for="status">Estado</label>
                                            <select name="status" id="status"
                                                class="form-control" required>
                                                <option value="">Seleccionar</option>
                                                @foreach ($statuss as $status)
                                                <option value="{{ $status['value'] }}" 
                                                    @if($status['value'] == $learning_enviroment['status']) selected @endif>
                                                    {{ $status['name'] }}
                                                </option>
                                                @endforeach
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

