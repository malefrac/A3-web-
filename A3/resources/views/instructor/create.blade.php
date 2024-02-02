@extends('templates.base')
@section('title', 'Crear instructor')
@section('header','Crear instructor')
@section('content')
    @include('templates.messages')
    <div class="row">
        <div class="col-lg-12 mb-4">
            <form action="#" method="POST">
                @csrf
                <div class="row form-group">
                    <div class="col-lg-6 mb-4">
                        <label for="document">Documento</label>
                        <input type="number" class="form-control"
                        id="document" name="document" required>    
                    </div>
                    <div class="col-lg-6 mb-4">
                        <label for="fullname">Nombre Completo</label>
                        <input type="text" class="form-control"
                        id="fullname" name="fullname" required> 
                    </div>  
                </div>
                <div class="row form-group">
                    <div class="col-lg-6 mb-4">
                        <label for="sena_email">Correo Sena</label>
                        <input type="email" class="form-control"
                        id="sena_email" name="sena_email" required>    
                    </div>
                    <div class="col-lg-6 mb-4">
                        <label for="personal_email">Correo personal</label>
                        <input type="email" class="form-control"
                        id="personal_email" name="personal_email" required>
                    </div>   
                </div>
                <div class="row form-group">
                    <div class="col-lg-6 mb-4">
                        <label for="phone">Teléfono</label>
                        <input type="number" class="form-control"
                        id="phone" name="phone" required>    
                    </div>
                    <div class="col-lg-6 mb-4">
                        <label for="password">Contraseña</label>
                        <input type="text" class="form-control"
                        id="password" name="password" required>
                    </div>   
                </div>
                <div class="row form-group">
                    <div class="col-lg-6 mb-4">
                        <label for="type">Tipo</label>
                        <select name="type" id="type"
                        class="form-control" required>
                        <option value="Seleccionar">Seleccionar</option>
                        <option value="Planta">Planta</option>
                        <option value="Contratista">Contratista</option>
                        </select>
                    </div>  
                    <div class="col-lg-6 mb-4">
                        <label for="profile">Perfil</label>
                        <input type="text" class="form-control"
                        id="profile" name="profile" required>   
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-lg-6 mb-4">
                        <button class="btn btn-primary btn-block" type="submit">
                            Guardar
                        </button>                        
                    </div>
                    <div class="col-lg-6 mb-4">
                        <a href="{{ route('instructor.index') }}" class="btn btn-secondary btn-block">
                            Cancelar
                        </a> 
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection



