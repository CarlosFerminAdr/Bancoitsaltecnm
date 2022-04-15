@extends('adminlte::page')

@section('title', 'Panel Control')

@section('content_header')
    <strong><h1>SISTEMA DE GESTIÓN DE BANCOS DE PROYECTOS</h1></strong>
@stop

@section('content')
    <strong><p>Instituto Tecnológico de Salina Cruz.</p></strong>
    <hr>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card-columns">
                    @foreach ( $convocatorias as $c )
                        <div class="card text-center" style="max-width: 20rem;">
                            <div class="card-header" style="background-color: DodgerBlue; color:white;">
                                {{$c->nombre}}
                            </div>
                            <div class="card-body">
                                <li class="list-group-item">
                                    <strong>Empresa:</strong>
                                    <p class="card-text">{{$c->empresa->nombre}}</p>
                                </li>
                                <li class="list-group-item">
                                    <strong>Titular:</strong>
                                    <p class="card-text">{{$c->empresa->titular}}</p>
                                </li>
                                <li class="list-group-item">
                                    <strong>No. Alumnos:</strong>
                                    <p class="card-text">{{$c->nalumnos}}</p>
                                </li>
                                <li class="list-group-item">
                                    <strong>Objetivo:</strong>
                                    <p class="card-text">{{$c->proyectograable->objetivo}}</p>
                                </li>
                                <li class="list-group-item">
                                    <strong>Problematica:</strong>
                                    <p class="card-text">{{$c->proyectograable->problematica}}</p>
                                </li>
                            </div>
                            <div>
                                <a href="#" class="btn btn-primary">Solicitud</a>
                            </div>
                            <div class="card-footer text-muted">
                                <strong>Fecha Limite: {{ $c->flimite }}</strong>
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
        {{ $convocatorias->links() }}
    </ul>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
