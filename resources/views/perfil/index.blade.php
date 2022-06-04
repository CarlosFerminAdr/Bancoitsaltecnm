@extends('adminlte::page')

@section('title', 'Alumno')

@section('content_header')
    <h1>PERFIL DE ALUMNO</h1>
@stop

@section('content')
    <div class="row">

            <div class="col-sm-12 mb-3">
                <div class="card was-validated shadow border border-primary">
                    <div class="card-header text-left" style="background-color: #1F5F96;">
                        <label for="apaterno">
                            <strong style="color:white">DATOS DEL ALUMNO:</strong>
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
                            <div class="col-md-4"><br>
                                <label for="proyecto" class="form-label">Teléfono:</label>
                                @if (isset(auth()->user()->name))
                                    <input type="text"class="form-control" id="proyecto" value="{{auth()->user()->alumno->telefono}}" readonly>
                                @else
                                    <input type="text"class="form-control" id="proyecto" value="Registre su Nombre.." readonly>
                                @endif
                            </div>
                            <div class="col-md-6"><br>
                                <label for="proyecto" class="form-label">Correo Electrónico:</label>
                                @if (isset(auth()->user()->name))
                                    <input type="text"class="form-control" id="proyecto" value="{{auth()->user()->alumno->correo}}" readonly>
                                @else
                                    <input type="text"class="form-control" id="proyecto" value="Registre su No. Control.." readonly>
                                @endif
                            </div>
                            <div class="col-md-2"><br>
                                <label for="proyecto" class="form-label">NIP:</label>
                                @if (isset(auth()->user()->name))
                                    <input type="text"class="form-control" id="proyecto" value="{{auth()->user()->alumno->nip}}" readonly>
                                @else
                                    <input type="text"class="form-control" id="proyecto" value="Registre su No. Control.." readonly>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    @can('perfil.index')
    <a class="btn btn-dark float-end mt-2" style="background-color: #1F5F96; color:white" href="{{route('home')}}">
        <i class="fas fa-reply"></i> Atras</a>
    @endcan
@stop
