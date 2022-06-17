@extends('adminlte::page')

@section('title', 'Panel Control')

@section('content_header')
    <strong><h1>SISTEMA DE GESTIÓN DE BANCO DE PROGRAMAS (SERVICIO SOCIAL)</h1></strong>
@stop

@section('content')
    <a class="btn float-right mt-2" style="background-color: #1F5F96; color:white" href="{{route('home')}}">PROYECTOS</a><br>
    <a class="float-end mt-2" href="home2"><p><strong>Instituto Tecnológico de Salina Cruz.</strong></p></a>
    <hr>
    @if (Session('mensaje') == 'Solicitud realizada corectamente!')
        <div class="alert alert-success alert-dismissible fade show" role="alert" style="color:white">
            <strong>{{Session('mensaje')}}</strong>
            <button type="button"class="close" data-dismiss="alert" aria-label="close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card-columns">
                    @foreach ( $programas as $x )
                        <div class="card text-center" style="max-width: 20rem;">
                            @if($x->status == 1)
                                <div class="card-header" style="background-color: rgb(255, 165, 0); color:white;">
                                    <i class="fas fa-clock"></i><strong> EN PROCESO</strong></div>
                            @elseif ($x->status == 2)
                                <div class="card-header" style="background-color: rgb(165, 42, 42); color:white;">
                                    <i class="fas fa-ban"></i><strong> ASIGNADO</strong></div>
                            @elseif ($x->status == 3)
                                <div class="card-header" style="background-color: rgb(34, 139, 34); color:white;">
                                    <i class="fas fa-check-circle"></i><strong> DISPONIBLE</strong></div>
                            @endif
                            <div class="card-body">
                                <li class="list-group-item">
                                    <strong>PROGRAMA:</strong>
                                    <p class="card-text">{{$x->proyectograma->nombre}}</p>
                                </li>
                                <li class="list-group-item">
                                    <strong>EMPRESA:</strong>
                                    <p class="card-text">{{$x->proyectograma->empresa->nombre}}</p>
                                </li>
                                <li class="list-group-item">
                                    <strong>TITULAR:</strong>
                                    <p class="card-text">{{$x->proyectograma->empresa->titular}}</p>
                                </li>
                                <li class="list-group-item">
                                    <strong>No. ALUMNOS:</strong>
                                    <p class="card-text">{{$x->proyectograma->nalumnos}}</p>
                                </li>
                                <li class="list-group-item">
                                    <strong>CARRERA:</strong>
                                    <p class="card-text">{{$x->carrera->nombre}}</p>
                                </li>
                                <li class="list-group-item">
                                    <strong>PERIODO:</strong>
                                    <p class="card-text">{{$x->periodo->nombre}}</p>
                                </li>
                                <li class="list-group-item">
                                    <strong>ACTIVIDADES:</strong>
                                    <p class="card-text">{{$x->actividades}}</p>
                                </li>
                                <li class="list-group-item">
                                    <strong>TIPO DE PROGRAMA:</strong>
                                    <p class="card-text">{{$x->tipo->tipo_programa}}</p>
                                </li>
                            </div>
                            <div>
                            @can('perfil.index')
                                <div>
                                    @if($x->status == 1)
                                        <a href="#" class="btn disabled" aria-disabled="true" style="background-color: #1F5F96; color:white">Solicitud</a>
                                    @elseif ($x->status == 2)
                                        <a href="#" class="btn disabled" aria-disabled="true" style="background-color: #1F5F96; color:white">Solicitud</a>
                                    @elseif ($x->status == 3)
                                        <a href="{{route('solicitudPrograma.show',$x)}}" class="btn" style="background-color: #1F5F96; color:white">Solicitud</a>
                                    @endif
                                </div>
                            @endcan
                            </div>
                            <div class="card-footer text-muted">
                                <strong>Fecha Limite: {{ utf8_encode(strftime("%d %B %Y", strtotime($x->proyectograma->flimite))) }}</strong>
                            </div>
                        </div>
                        <br>
                        <br>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <hr>
    <ul class="pagination justify-content-center">
        {{ $programas->links() }}
    </ul>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
