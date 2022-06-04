@extends('adminlte::page')

@section('title', 'Proyecto')

@section('content_header')
    <h1>PROYECTO ASIGNADO</h1>
@stop

@section('content')
    <form action="{{route('acuiculturaoff.update',$acuiculturaoff)}}" method="POST" autocomplete="off">
        @csrf
        @method('PUT')
        @include('acuiculturaoff.form',['modo'=>'Autorizar'])
    </form>
    <br>
@stop
