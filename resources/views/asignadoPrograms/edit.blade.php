@extends('adminlte::page')

@section('title', 'Proyecto')

@section('content_header')
    <h1>PROGRAMA ASIGNADO</h1>
@stop

@section('content')
    <form action="{{route('asignadoPrograms.update',$asignadoProgram)}}" method="POST" autocomplete="off">
        @csrf
        @method('PUT')
        @include('asignadoPrograms.form',['modo'=>'Autorizar'])
    </form>
    <br>
@stop
