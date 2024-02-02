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
                    <tr>
                        <td>3</td>
                        <td>5738908174</td>
                        <td>Ms. Jacinthe Stamm</td>
                        <td>kayli.heathcote@sena.com</td>
                        <td>jammie71@gmail.com</td>
                        <td>+18025255988</td>
                        <td>$2y$12$Ulop1Hk8zlfL9bNqMEme3eiq6umv30ggGUhqmARf05pjJ8v3QhfSS</td>
                        <td>Contratista</td>
                        <td>Fisica</td>
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


