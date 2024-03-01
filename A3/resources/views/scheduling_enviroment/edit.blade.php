@extends('templates.base')
@section('title', 'Editar Reservas de Ambiente')
@section('header', 'Editar Reservas de Ambiente')
@section('content')
    @include('templates.messages')
    <div class="row">
        <div class="col-lg-12 mb-4">
<<<<<<< Updated upstream
            <form action="{{ route('scheduling_enviroment.update', $scheduling_enviroment['id']) }}" method="POST">
=======
            <form action="{{ route('scheduling_enviroment.update',$scheduling_enviroment['id']) }}" method="POST">
>>>>>>> Stashed changes
                @csrf
                @method('PUT')
                <div class="row form-group">
                    <div class="col-lg-4 mb-4">
                        <label for="course_id">Curso</label>
                        <select name="course_id" id="course_id"
                            class="form-control" required>
                            <option value="">Seleccione</option>
                            @foreach ($courses as $course)
                                <option value="{{$course['id']}}" 
                                    @if ($course['id'] == $scheduling_enviroment['course_id'])
                                    selected @endif> 
                                    {{ $course['code'] }}                                    
                                </option>
                            @endforeach                            
                        </select>
                    </div>
            
                    <div class="col-lg-4 mb-4">
                        <label for="instructor_id">Instructor</label>
                        <select name="instructor_id" id="instructor_id"
                        class="form-control" required>
                        <option value="">Seleccione</option>
                            @foreach ($instructors as $instructor)
                                <option value="{{$instructor['id']}}" 
                                    @if ($instructor['id'] == $scheduling_enviroment['instructor_id'])
                                    selected @endif> 
                                    {{ $instructor['fullname'] }}
                                </option>
                            @endforeach                       
                        </select>
                    </div>
                                
                    <div class="col-lg-4 mb-4">
                        <label for="date_scheduling">Fecha de programacion</label>
                        <input type="date" class="form-control"
                        id="date_scheduling" name="date_scheduling" required
                        value="{{ $scheduling_enviroment['date_scheduling'] }}">
                    </div>
                </div>     
                <div class="row form-group">

                    <div class="col-lg-4 mb-4">
                        <label for="initial_hour">Hora inicial</label>
                        <input type="time" class="form-control"
                        id="initial_hour" name="initial_hour" required
                        value="{{ $scheduling_enviroment['initial_hour'] }}">
                    </div>
                    
                    <div class="col-lg-4 mb-4">
                        <label for="final_hour">Hora final</label>
                        <input type="time" class="form-control"
                        id="final_hour" name="final_hour" required
                        value="{{ $scheduling_enviroment['final_hour'] }}">
                    </div>

                    <div class="col-lg-4 mb-4">
                        <label for="enviroment_id">Ambiente</label>
                        <select name="enviroment_id" id="enviroment_id"
                            class="form-control" required>
                            <option value="">Seleccione</option>
                            @foreach ($learning_enviroments as $learning_enviroment)
                                <option value="{{$learning_enviroment['id']}}" 
                                    @if ($learning_enviroment['id'] == $scheduling_enviroment['enviroment_id'])
                                    selected @endif> 
                                    {{ $learning_enviroment['name'] }}

                                </option>
                            @endforeach
                        </select>  
                    </div>
                </div>
                
                <div class="row form-group">
                    <div class="col-lg-6 mb-4">
                        <button class="btn btn-primary btn-block"
                            type="submit">
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