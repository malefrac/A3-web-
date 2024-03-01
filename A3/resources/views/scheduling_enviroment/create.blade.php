@extends('templates.base')
@section('title', 'Crear Reservas de Ambiente')
@section('header', 'Crear Reservas de Ambiente')
@section('content')
    @include('templates.messages')
    <div class="row">
        <div class="col-lg-12 mb-4">
            <form action="{{ route('scheduling_enviroment.store') }}" method="POST">
                @csrf
                <div class="row form-group">
                    <div class="col-lg-4 mb-4">
                            <label for="course_id">Curso</label>
                            <select name="course_id" id="course_id"
                            class="form-control" required>
<<<<<<< Updated upstream
                            <option value="">Seleccione</option>
                            @foreach ($courses as $course)
                            <option value="{{ $course ['id']}}"
                            @if (old('course_id') == $course['code']) selected @endif>
                                {{ $course ['code']}}
                            </option>
                            
                            @endforeach
                            
                            </select>
=======
                            <option value="">Seleccionar</option>
                            @foreach ($courses as $course)
                            <option value="{{ $course['id'] }}">
                                {{ $course['code'] }}
                            </option>
                        @endforeach
                        </select>  
>>>>>>> Stashed changes
                    </div>
            
                    <div class="col-lg-4 mb-4">
                        <label for="instructor_id">Instructor</label>
                        <select name="instructor_id" id="instructor_id"
<<<<<<< Updated upstream
                        class="form-control" required>
                        <option value="">Seleccione</option>
                        @foreach ($instructors as $instructor)
                            <option value="{{ $instructor ['id']}}"
                            @if (old('instructor_id') == $instructor['fullname']) selected @endif>
                                {{ $instructor ['fullname']}}
                            </option>
                            
                        @endforeach
                        </select>
=======
                            class="form-control" required>
                            <option value="">Seleccionar</option>
                            @foreach ($instructors as $instructor)
                            <option value="{{ $instructor['id'] }}">
                                {{ $instructor['document'] }}
                            </option>
                        @endforeach
                        </select>   
>>>>>>> Stashed changes
                    </div>
                                
                    <div class="col-lg-4 mb-4">
                        <label for="date_scheduling">Fecha de programacion</label>
                        <input type="date" class="form-control"
                        id="date_scheduling" name="date_scheduling" required
                        value="{{ old('date_scheduling') }}">
                        
                        
                        </select>
                    </div>
                </div>    

                
                <div class="row form-group">

                    <div class="col-lg-4 mb-4">
                        <label for="initial_hour">Hora inicial</label>
                        <input type="time" class="form-control"
                        id="initial_hour" name="initial_hour" required
                        value="{{ old('initial_hour') }}">
                    </div>
                    
                    <div class="col-lg-4 mb-4">
                        <label for="final_hour">Hora final</label>
                        <input type="time" class="form-control"
                        id="final_hour" name="final_hour" required
                        value="{{ old('final_hour') }}">
                    </div>

                    <div class="col-lg-4 mb-4">
                        <label for="enviroment_id">Ambiente</label>
                        <select name="enviroment_id" id="enviroment_id"
<<<<<<< Updated upstream
                        class="form-control" required>
                        <option value="">Seleccione</option>
                        @foreach ($learning_enviroments as $learning_enviroment)
                            <option value="{{ $learning_enviroment ['id']}}"
                            @if (old('enviroment_id') == $learning_enviroment['name']) selected @endif>
                                {{ $learning_enviroment ['name']}}
                            </option>                        
                        @endforeach
                        </select>
                        
=======
                            class="form-control" required>
                            <option value="">Seleccionar</option>
                            @foreach($learning_enviroment as $learning_enviroments)
                                <option value="{{ $learning_enviroment["id"] }}">
                                    {{ $learning_enviroment['name'] }}
                                </option>
                                
                            @endforeach
                        </select>      
>>>>>>> Stashed changes
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