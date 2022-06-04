@extends('adminlte::page')

@section('title', 'Proyecto')

@section('content_header')
    <h1>PROGRAMA EN PROCESO</h1>
@stop

@section('content')
    <form action="{{route('procesoPrograms.update',$procesoProgram)}}" method="POST" autocomplete="off">
        @csrf
        @method('PUT')
        @include('procesoPrograms.form',['modo'=>'Autorizar'])
    </form>
    <br>
@stop
