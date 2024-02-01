@extends('templates.base')
@section('title', 'Crear programación del ambiente')
@section('header', 'Crear programación del ambiente')
@section('content')
    @include('templates.messages')
    <div class="row">
        <div class="col-lg-12 mb-4">
            <form action="#" method="POST">
                @csrf
                <div class="row form-group">
                    <div class="col-lg-4 mb-4">
                        <label for="course_id">Identificación del curso</label>
                        <input type="number" class="form-control"
                        id="course_id" name="course_id" required>    
                    </div>
                    <div class="col-lg-4 mb-4">
                        <label for="instructor_id">Identificación del instructor</label>
                        <input type="number" class="form-control"
                        id="instructor_id" name="instructor_id" required>    
                    </div>
                    <div class="col-lg-4 mb-4">
                        <label for="date_scheduling">Fecha de programación</label>
                        <input type="date" class="form-control"
                        id="date_scheduling" name="date_scheduling" required>    
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col-lg-4 mb-4">
                        <label for="initial_hour">Hora inicial</label>
                        <input type="time" class="form-control"
                        id="initial_hour" name="initial_hour" required>    
                    </div>
                    <div class="col-lg-4 mb-4">
                        <label for="final_hour">Hora final</label>
                        <input type="time" class="form-control"
                        id="final_hour" name="final_hour" required>    
                    </div>
                    <div class="col-lg-4 mb-4">
                        <label for="enviroment_id">Identificación del ambiente</label>
                        <input type="number" class="form-control"
                        id="enviroment_id" name="enviroment_id" required>    
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col-lg-6 mb-4">
                        <button class="btn btn-primary btn-block" type="submit">
                            Guardar
                        </button>                        
                    </div>
                    <div class="col-lg-6 mb-4">
                        <a href="{{ route('scheduling_enviroment.index') }}" class="btn btn-secondary btn-block">
                            Cancelar
                        </a> 
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

