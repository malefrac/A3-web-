@extends('templates.base')
@section('title', 'Listado de programción de ambientes')
@section('header', 'Listado de programción de ambientes')
@section('content')
    <div class="row">
        <div class="col-lg-12 mb-4 d-grip gap-2 d--md-block">
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
                        <th>Identificación del curso</th>
                        <th>Identificación del instructor</th>
                        <th>Fecha de programción</th>
                        <th>Hora inicial</th>
                        <th>Hora final</th>
                        <th>Identificación del ambiente</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>2771230</td>
                        <td>1005091887</td>
                        <td>2024/02/01</td>
                        <td>08:00</td>
                        <td>12:00</td>
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

