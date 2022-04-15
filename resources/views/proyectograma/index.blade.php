@extends('adminlte::page')

@section('title', 'Proyectograma')

@section('content_header')
    <h1>BANCO DE PROYECTOS</h1>
@stop

@section('content')

    @if (Session::has('mensaje'))
        <strong>{{Session::get('mensaje')}}</strong>
    @endif
    <br>
    <a class="btn btn-primary float-right col-sm-1" href="{{route('proyectogramas.create')}}">
        <i class="fas fa-plus-square"></i> Nuevo</a><br><br>
    <table class="table table-hover table-primary" style="background-color: white;">
        <thead class="thead" style="background-color: DodgerBlue;">
            <tr style="color:white">
                <th scope="col">#</th>
                <th scope="col">Proyecto</th>
                <th scope="col">No. Alumnos</th>
                <th scope="col">Fecha Limite</th>
                <th scope="col">Estatus</th>
                <th scope="col">Empresa</th>
                <th colspan="2"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ( $proyectogramas as $b )
                <tr style="color:black">
                    <th scope="row">{{$b->id}}</th>
                    <td>{{$b->nombre}}</td>
                    <td>{{$b->nalumnos}}</td>
                    <td>{{$b->flimite}}</td>
                    <td>{{$b->estado->tipo_status}}</td>
                    <td>{{$b->empresa->nombre}}</td>
                    <td>
                        <a class="btn btn-warning col-sm-8" href="{{route('proyectogramas.edit',$b)}}">
                            <i class="fas fa-highlighter"></i></a>
                    </td>
                    <td>
                        <form action="{{route('proyectogramas.destroy',$b)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger col-sm-8"type="submit" onclick="return confirm('¿Desea eliminar el registro?');">
                                <i class="far fa-trash-alt"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

{{$proyectogramas->links()}}

@stop
