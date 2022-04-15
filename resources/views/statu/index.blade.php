@extends('adminlte::page')

@section('title', 'Periodos')

@section('content_header')
    <h1>PERIODOS</h1>
@stop

@section('content')

    @if (Session::has('mensaje'))
        <strong>{{Session::get('mensaje')}}</strong>
    @endif
    <br>
    <a class="btn btn-primary float-right col-sm-1" href="{{route('status.create')}}">
        <i class="fas fa-plus-square"></i> Nuevo</a><br><br>
    <table class="table table-hover table-primary" style="background-color: white;">
        <thead class="thead" style="background-color: DodgerBlue;">
            <tr style="color:white">
                <th scope="col">#</th>
                <th scope="col">Estatus</th>
                <th colspan="2"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ( $status as $statu )
                <tr style="color:black">
                    <th scope="row">{{$statu->id}}</td>
                    <td>{{$statu->estado}}</td>
                    <td>
                        <a class="btn btn-warning col-sm-4" href="{{route('status.edit',$statu->id)}}">
                            <i class="fas fa-highlighter"></i></a>
                    </td>
                    <td>
                        <form action="{{route('status.destroy',1)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger col-sm-4" type="submit" onclick="return confirm('¿Desea eliminar el registro?');">
                                <i class="far fa-trash-alt"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{$status->links()}}

@stop
