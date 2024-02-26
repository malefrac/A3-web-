@extends('templates.base')
@section('title', 'Listado de Reservas')
@section('header', 'Listado de Reservas')
@section('content')
    <div class="row">
        <div class="col-lg-12 mb-4 d-grip grap-2 d-md-block">
            <a href="{{ route('scheduling_enviroment.create') }}" class="btn btn-primary">Crear</a>
        </div>
    </div>
    @include('templates.messages')

    <div class="row">
        <div class="col-lg-12 mb-4">
            <table id="table_data" class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Curso</th>
                        <th>Instructor</th>
                        <th>Fecha de programacion</th>
                        <th>Hora inical</th>
                        <th>Hora final</th>
                        <th>Ambiente</th>
                        <th>Acciones</th>


                    </tr>
                </thead>
                <tbody>
                    @foreach ($scheduling_enviroments as $scheduling_enviroment)                   
                        <tr>
                            
                            <td>{{ $scheduling_enviroment['id'] }}</</td>
                            <td>{{ $scheduling_enviroment->course->code}}</td>
                            <td>{{ $scheduling_enviroment->instructor->fullname}}</td>
                            <td>{{ $scheduling_enviroment['date_scheduling'] }}</td>
                            <td>{{ $scheduling_enviroment['initial_hour'] }}</td>
                            <td>{{ $scheduling_enviroment['final_hour'] }}</td>
                            <td>{{ $scheduling_enviroment->learning_enviroment->name}}</td>
                            
                            
                            <td>
                                <a href="{{ route('scheduling_enviroment.edit', $scheduling_enviroment ['id']) }}" title="editar" class="btn btn-info btn-circle btn-sm">
                                    <i class="far fa-edit"></i>
                                </a>
                                <a href="{{ route('scheduling_enviroment.destroy', $scheduling_enviroment ['id']) }}" title="eliminar" class="btn btn-danger btn-circle btn-sm" onclick="return remove();">
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