@extends('templates.base_reports')
@section('header', 'Reporte reservas de ambientes')
@section('content')
    <section id="results">
     @if ($learning_enviroments)
         
        <h3>Reservas</h3>
        <table id="ReportTable">
            <thead>
                <tr>
                     <th>Id</th>
                     <th>Nombre</th>
                     <th>Capacidad</th>
                     <th>Area_mt2</th>
                     <th>Piso</th>
                     <th>Inventario</th>
                     <th>Tipo</th>
                     <th>Lugar</th>
                     <th>Estado</th>
                 </tr>
            </thead>
            <tbody>
                @foreach ($learning_enviroments as $learning_enviroment)
                    <tr>
                        <td>{{ $learning_enviroment['id'] }}</td>
                        <td>{{ $learning_enviroment['name']}}</td>
                        <td>{{ $learning_enviroment['capacity']}}</td>
                        <td>{{ $learning_enviroment['area_mt2']}}</td>
                        <td>{{ $learning_enviroment['floor']}}</td>
                        <td>{{ $learning_enviroment['inventory']}}</td>
                        <td>{{ $learning_enviroment->enviroment_type->description}}</td>
                        <td>{{ $learning_enviroment->location->name}}</td>
                        <td>{{ $learning_enviroment['status']}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <h5>No existen ambientes</h5>
    @endif
    </section>
@endsection
