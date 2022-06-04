@extends('adminlte::page')

@section('title', 'Proyecto')

@section('content_header')
    <h1>PROYECTO EN PROCESO</h1>
@stop

@section('content')
    <form action="{{route('quimicaoff.update',$quimicaoff)}}" method="POST" autocomplete="off">
        @csrf
        @method('PUT')
        @include('quimicaoff.form',['modo'=>'Autorizar'])
    </form>
    <br>
@stop
