@extends('adminlte::page')

@section('title', 'Programa')

@section('content_header')
    <h1>EDITAR PROGRAMA</h1>
@stop

@section('content')
    <form action="{{route('programas.update',$programa)}}" method="POST" autocomplete="off">
        @csrf
        @method('PUT')
        @include('programa.form',['modo'=>'Editar'])
    </form>
    <br>
@stop

@section('js')
    <script src="https://cdn.ckeditor.com/ckeditor5/30.0.0/classic/ckeditor.js"></script>

@stop
