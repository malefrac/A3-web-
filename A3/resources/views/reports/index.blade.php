@extends('templates.base')
@section('title', 'Reportes')
@section('header', 'Reportes')
@section('content')
    @include('templates.messages')

    <div class="row">
        <div class="col-lg-12 mb-4">
            <div class="card shadow mb-4" >
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">
                        Reportes general de técnicos
                    </h6>
                </div>
                <div class="card-body">
                    <a href="{{ route('reports.technicians') }}" title="PDF" class="btn btn-info btn-block col-lg-3 mb-4">
                        <i class="fa-solid fa-file-pdf"></i>
                    </a>

                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12 mb-4">
            <div class="card shadow mb-4" >
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">
                        Reportes general de usuarios
                    </h6>
                </div>
                <div class="card-body">
                    <a href="{{ route('reports.users') }}" title="PDF" class="btn btn-info btn-block col-lg-3 mb-4">
                        <i class="fa-solid fa-file-pdf"></i>
                    </a>

                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12 mb-4">
            <div class="card shadow mb-4" >
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">
                        Reportes de activitdades por Técnico
                    </h6>
                </div>
                <div class="card-body">
                    <form action="{{ route('reports.activities_technician') }}" method="POST">
                    @csrf
                    <div class="row form-group">
                        <div class="col-lg-2">
                            <label for="technician_id">Técnico</label>
                        </div>
                        <div class="col-lg-5">
                            <select name="technician_id" id="technician_id" class="form-control" required>
                                <option value="">Selecione</option>
                                @foreach ($technicians as $technician )
                                <option value="{{ $technician['document'] }}">
                                {{ $technician['name'] }}
                            </option>
                                @endforeach
                            </select>

                        </div>
                        <div class="col-lg-5">
                            <button type="submit" class="btn btn-success btn-block col-lg-3 mb-4">
                                <i class="fa-solid fa-file-pdf"></i>
                            </button>

                        </div>
                    </div>
                </form>
                <div class="row">
                    <div class="col-lg-12 mb-4">
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">
                                    Reporte de ordenes
                                </h6>
                            </div>
                            <div class="card-body">
                                <form action="{{ route("reports.orders_date") }}" method="POST">
                                @csrf
                                <div class="row form-group">
                                    <div class="col-lg-6">
                                        <label for="initial_date">fecha inicial</label>
                                    </div>
                                        <div class="col-lg-5">
                                            <input type="date" class="form-control"
                                            id="legalization_date" name="legalization_date" required >
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="final_date">fecha final</label>
                                    </div>
                                        <div class="col-lg-5">
                                            <input type="date" class="form-control"
                                            id="legalization_date" name="legalization_date" required >
                                    </div>
                                    <div class="col-lg-5">
                                        <button type="submit" class="btn btn-success btn-block col-lg-3 mb4">
                                            <i class="fa-solid fa-file-pdf"></i>
            
                                        </button>
            
                                    </div>
            
            
                                </div>
                            </form>
                                
                            </div>
                        </div>
                    </div>

        </div>

    @endsection