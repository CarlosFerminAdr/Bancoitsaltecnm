@extends('adminlte::page')

@section('title', 'Proyecto')

@section('content_header')
    <h1>PROGRAMA EN PROCESO</h1>
@stop

@section('content')
    <form action="{{route('disponiblePrograms.update',$disponibleProgram)}}" method="POST" autocomplete="off">
        @csrf
        @method('PUT')
        @include('disponiblePrograms.form',['modo'=>'Autorizar'])
    </form>
    <br>
@stop
