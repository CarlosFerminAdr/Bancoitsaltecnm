@extends('adminlte::page')

@section('title', 'Proyecto')

@section('content_header')
    <h1>PROYECTO DISPONIBLE</h1>
@stop

@section('content')
    <form action="{{route('electronicaon.update',$electronicaon)}}" method="POST" autocomplete="off">
        @csrf
        @method('PUT')
        @include('electronicaon.form',['modo'=>'Autorizar'])
    </form>
    <br>
@stop
