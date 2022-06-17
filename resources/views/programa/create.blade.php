@extends('adminlte::page')

@section('title', 'Programa')

@section('content_header')
    <h1>AGREGAR PROGRAMA</h1>
@stop

@section('content')
    <form action="{{route('programas.store')}}" method="POST" autocomplete="off">
        @csrf
        @include('programa.form',['modo' => 'Guardar'])
    </form>
    <br>
@stop

@section('js')
    <script src="https://cdn.ckeditor.com/ckeditor5/30.0.0/classic/ckeditor.js"></script>

@stop
