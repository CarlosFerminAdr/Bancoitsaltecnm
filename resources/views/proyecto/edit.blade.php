@extends('adminlte::page')

@section('title', 'Proyecto')

@section('content_header')
    <h1>PROYECTO EN PROCESO</h1>
@stop

@section('content')
    <form action="{{route('proyectos.update',$proyecto)}}" method="POST" autocomplete="off">
        @csrf
        @method('PUT')
        @include('proyecto.form',['modo'=>'Editar'])
    </form>
    <br>
@stop

@section('js')
    <script src="https://cdn.ckeditor.com/ckeditor5/30.0.0/classic/ckeditor.js"></script>
    {{--
    <script>
        ClassicEditor
            .create( document.querySelector( '#objetivo' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>

    <script>
        ClassicEditor
            .create( document.querySelector( '#problematica' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
    --}}
@stop
