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
                        <th>Estado</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($learning_enviroments as $learning_enviroment)
                        <tr>
                            <td>{{ $learning_enviroment['id'] }}</td>
                            <td>{{ $learning_enviroment['name'] }}</td>
                            <td>{{ $learning_enviroment['capacity'] }}</td>
                            <td>{{ $learning_enviroment['area_mt2'] }}</td>
                            <td>{{ $learning_enviroment['floor'] }}</td>
                            <td>{{ $learning_enviroment['inventory'] }}</td>
                            <td>{{ optional($learning_enviroment->enviroment_type)->description ?? '' }}</td>
                            <td>{{ optional($learning_enviroment->location)->name ?? '' }}</td>
                            <td>{{ $learning_enviroment['status'] }}</td>
                            <td>
                                <a href="{{ route('learning_enviroment.edit', $learning_enviroment['id']) }}" title="editar" 
                                    class="btn btn-info btn-circle btn-sm">
                                    <i class="far fa-edit"></i>
                                </a>
                                <a href="{{ route('learning_enviroment.destroy', $learning_enviroment['id']) }}" title="eliminar" 
                                    class="btn btn-danger btn-circle btn-sm"
                                    onclick="return remove()">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
    </div>

@endsection

@section('scripts')
    <script src="{{ asset('js/general.js') }}"></script>
@endsection

