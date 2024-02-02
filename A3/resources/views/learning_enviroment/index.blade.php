@extends('templates.base')
@section('title', 'Listado de ambientes de aprendizaje')
@section('header', 'Listado de ambientes de aprendizaje')
@section('content')
    <div class="row">
        <div class="col-lg-12 mb-4 d-grip gap-2 d--md-block">
            <a href="{{ route('learning_enviroment.create') }}" class="btn btn-primary">Crear</a>
        </div>
    </div>

    @include('templates.messages')

    <div class="row">
        <div class="col-lg-12 mb-4">
            <table id="table_data" class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Capacidad</th>
                        <th>Area en mt2</th>
                        <th>Piso</th>
                        <th>Inventario</th>
                        <th>Tipo</th>
                        <th>Locación</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Aula 210</td>
                        <td>30</td>
                        <td>15</td>
                        <td>3</td>
                        <td>1 tv, 1 tablero</td>
                        <td>1</td>
                        <td>1</td>
                        <td>
                            <a href="#" title="editar" 
                                class="btn btn-info btn-circle btn-sm">
                                <i class="far fa-edit"></i>
                            </a>
                            <a href="#" title="eliminar" 
                                class="btn btn-danger btn-circle btn-sm"
                                onclick="return remove()">
                                <i class="fas fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                </tbody>

            </table>
        </div>
    </div>

@endsection

@section('scripts')
    <script src="{{ asset('js/general.js') }}"></script>
@endsection

