@extends('adminlte::page')

@section('title', 'Solicitud Proyecto')

@section('content_header')
    <h1>SOLICITUD DE PROYECTO</h1>
@stop

@section('content')
    @if ($errors->has('alumno_id'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert" style="color:white">
            <strong>{{ $errors->first('alumno_id') }}</strong>
            <button type="button"class="close" data-dismiss="alert" aria-label="close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <form id="form" action="{{route('solicitudProyecto.store')}}" method="POST" autocomplete="off">
        @csrf
        <div class="row">
            <div class="col-sm-12 mb-3">
                <div class="card shadow border border-primary">
                    <div class="card-header text-left" style="background-color: #1F5F96;">
                        <label for="datalles">
                            <strong style="color:white">DETALLES DEL PROYECTO</strong>
                        </label>
                    </div>
                    <div class="card-body">
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <label for="proyecto" class="form-label">Proyecto:</label>
                                <input type="text"class="form-control" id="proyecto" value="{{$proyecto->proyectograma->nombre}}" readonly>
                            </div>
                            <div class="col-md-8"><br>
                                <label for="proyecto" class="form-label">Empresa:</label>
                                <input type="text"class="form-control" id="proyecto" value="{{$proyecto->proyectograma->empresa->nombre}}" readonly>
                            </div>
                            <div class="col-md-2"><br>
                                <label for="proyecto" class="form-label">Fecha Limite:</label>
                                <input type="text"class="form-control" id="proyecto" value="{{$proyecto->proyectograma->flimite}}" readonly>
                            </div>
                            <div class="col-md-2"><br>
                                <label for="proyecto" class="form-label">No Alumnos:</label>
                                <input type="text"class="form-control" id="proyecto" name="nalumnos" value="{{$proyecto->proyectograma->nalumnos}}" readonly>
                            </div>
                            <div class="col-md-8"><br>
                                <label for="proyecto" class="form-label">Carrera:</label>
                                <input type="text"class="form-control" id="proyecto" value="{{$proyecto->carrera->nombre}}" readonly>
                            </div>
                            <div class="col-md-4"><br>
                                <label for="proyecto" class="form-label">Periodo:</label>
                                <input type="text"class="form-control" id="proyecto" value="{{$proyecto->periodo->nombre}}" readonly>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card shadow border border-primary">
                    <div class="card-header text-left" style="background-color: #1F5F96;">
                        <label for="datalles">
                            <strong style="color:white">DATOS DEL ALUMNO</strong>
                        </label>
                    </div>
                    <div class="card-body">
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <label for="proyecto" class="form-label">Nombre:</label>
                                @if (isset(auth()->user()->name))
                                    <input type="text"class="form-control" id="proyecto" value="{{auth()->user()->alumno->nombre}} {{auth()->user()->alumno->apaterno}} {{auth()->user()->alumno->amaterno}}" readonly>
                                @else
                                    <input type="text"class="form-control" id="proyecto" value="Registre su Nombre.." readonly>
                                @endif
                            </div>
                            <div class="col-md-6">
                                <label for="proyecto" class="form-label">Carrera:</label>
                                @if (isset(auth()->user()->name))
                                    <input type="text"class="form-control" id="proyecto" value="{{auth()->user()->alumno->carrera->nombre}}" readonly>
                                @else
                                    <input type="text"class="form-control" id="proyecto" value="Registre su No. Control.." readonly>
                                @endif
                            </div>
                            <div class="col-md-2">
                                <label for="proyecto" class="form-label">No. Control:</label>
                                @if (isset(auth()->user()->name))
                                    <input type="text"class="form-control" id="proyecto" value="{{auth()->user()->alumno->ncontrol}}" readonly>
                                @else
                                    <input type="text"class="form-control" id="proyecto" value="Registre su No. Control.." readonly>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <input type="hidden" name="carrera_id" value="{{auth()->user()->alumno->carrera->id}}">
            <input type="hidden" name="proyecto_id" value="{{$proyecto->id}}">
            <input type="hidden" name="alumno_id" value="{{auth()->user()->alumno->id}}">
        </div>
        <div>
            <input class="btn btn-success float-right mt-2" type="submit" value="Enviar">

            <a class="btn float-end mt-2" style="background-color: #1F5F96; color:white" href="{{route('home')}}">
                <i class="fas fa-reply"></i> Cancelar</a>
        </div>
        <br>
    </form>
@stop
