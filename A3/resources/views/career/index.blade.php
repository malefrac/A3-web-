@extends('templates.base')
@section('title', 'Listado de carreras')
@section('header', 'Listado de carreras')
@section('content')
    <div class="row">
        <div class="col-lg-12 mb-4 d-grip gap-2 d--md-block">
            <a href="{{ route('career.create') }}" class="btn btn-primary">Crear</a>
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
                        <th>Tipo</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($careers as $career)
                    <tr>
                        <td>{{ $career['id'] }}</td>
                        <td>{{ $career['name'] }}</td>
                        <td>{{ $career['type'] }}</td>
                        <td>
                            <a href="{{ route('career.edit' , $career['id']) }}" title="editar" 
                                class="btn btn-info btn-circle btn-sm">
                                <i class="far fa-edit"></i>
                            </a>
                            <a href="{{ route('career.destroy', $career['id']) }}" title="eliminar" 
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


