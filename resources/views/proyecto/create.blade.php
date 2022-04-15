@extends('adminlte::page')

@section('title', 'Proyecto')

@section('content_header')
    <h1>AGREGAR PROYECTO</h1>
@stop

@section('content')
    <form action="{{route('proyectos.store')}}" method="POST" autocomplete="off">
        @csrf
        @include('proyecto.form',['modo' => 'Guardar'])
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
