@extends('adminlte::page')

@section('title', 'Periodo')

@section('content_header')
    <h1>{{$modo}} TIPO DE PROGRAMA</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-sm-12 mb-3">
            <div class="card was-validated shadow border border-primary">
                <div class="card-header text-left" style="background-color: #1F5F96;">
                    <label for="tipo_programa">
                        <strong style="color:white">Tipo de Programa:</strong>
                    </label>
                </div>

                <div class="card-body">
                    <input type="text" class="form-control is-valid" id="tipo_programa" name="tipo_programa"
                        placeholder="escriba tipo de Programa.." value="{{isset($tipo->tipo_programa)?$tipo->tipo_programa:old('tipo_programa')}}" required>
                    @error('tipo_programa')
                        <div style="color:red;">
                            <strong>* {{ $message }}</strong>
                        </div>
                    @enderror
                </div>
            </div>
        </div>
    </div>

    <input class="btn btn-success float-right mt-2" type="submit" value="{{$modo2}}">

    <a class="btn float-end mt-2" style="background-color: #1F5F96; color:white" href="{{route('tipos.index')}}">
        <i class="fas fa-reply"></i> Atras</a>

@stop
