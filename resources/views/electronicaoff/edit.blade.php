@extends('adminlte::page')

@section('title', 'Proyecto')

@section('content_header')
    <h1>PROYECTO ASIGNADO</h1>
@stop

@section('content')
    <form action="{{route('electronicaoff.update',$electronicaoff)}}" method="POST" autocomplete="off">
        @csrf
        @method('PUT')
        @include('electronicaoff.form',['modo'=>'Autorizar'])
    </form>
    <br>
@stop
