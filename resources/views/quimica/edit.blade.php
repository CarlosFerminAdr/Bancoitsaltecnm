@extends('adminlte::page')

@section('title', 'Proyecto')

@section('content_header')
    <h1>PROYECTO EN PROCESO</h1>
@stop

@section('content')
    <form action="{{route('quimica.update',$quimica)}}" method="POST" autocomplete="off">
        @csrf
        @method('PUT')
        @include('quimica.form',['modo'=>'Autorizar'])
    </form>
    <br>
@stop
