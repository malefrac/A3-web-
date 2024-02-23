@extends('templates.base')
@section('title', 'Listado de intructores')
@section('header','Listado de intructores')
@section('content')
    <div class="row">
        <div class="col-lg-12 mb-4 d-grip gap-2 d--md-block">
            <a href="{{ route('instructor.create') }}" class="btn btn-primary">Crear</a>
        </div>
    </div>

    @include('templates.messages')

    <div class="row">
        <div class="col-lg-12 mb-4">
            <table id="table_data" class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Documento</th>
                        <th>Nombre completo</th>
                        <th>Correo sena</th>
                        <th>Correo personal</th>
                        <th>Teléfono</th>
                        <th>Contraseña</th>
                        <th>Tipo</th>
                        <th>Perfil</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($instructors as $instructor)
                    <tr>
                        <td>{{$instructor['id']}}</td>
                        <td>{{$instructor['document']}}</td>
                        <td>{{$instructor['fullname'] }}</td>
                        <td>{{$instructor['sena_email'] }}</td>
                        <td>{{$instructor['personal_email']}}</td>
                        <td>{{$instructor['phone'] }}</td>
                        <td>{{$instructor['password'] }}</td>
                        <td>{{$instructor['type']}}</td>
                        <td>{{$instructor['profile'] }}</td>
                        <td>
                            <a href="{{ route('instructor.edit' , $instructor['id']) }}" title="editar" 
                                class="btn btn-info btn-circle btn-sm">
                                <i class="far fa-edit"></i>
                            </a>
                            <a href="{{ route('instructor.destroy' , $instructor['id']) }}" title="eliminar" 
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



