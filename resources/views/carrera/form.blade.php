@extends('adminlte::page')

@section('title', 'Carrera')

@section('content_header')
    <h1>{{$modo}} CARRERA</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-sm-6 mb-3">
            <div class="card was-validated shadow border border-primary">
                <div class="card-header text-left" style="background-color: #1F5F96;">
                    <label for="nombre">
                        <strong style="color:white">Carrera:</strong>
                    </label>
                </div>

                <div class="card-body">
                    <input type="text" class="form-control is-valid" id="nombre" name="nombre"
                        placeholder="escriba el nombre de la Carrera.." value="{{isset($carrera->nombre)?$carrera->nombre:old('nombre')}}" required>
                    @error('nombre')
                        <div style="color:red;">
                            <strong>* {{ $message }}</strong>
                        </div>
                    @enderror
                </div>
            </div>
        </div>

        <div class="col-sm-6 mb-3">
            <div class="card was-validated shadow border border-primary">
                <div class="card-header text-left" style="background-color: #1F5F96;">
                    <label for="jdepto_id">
                        <strong style="color:white">Jefe de Departamento:</strong>
                    </label>
                </div>
                <div class="card-body">
                    <select class="custom-select" name="jdepto_id" id="jdepto_id" required>
                        <option value="">-Seleccionar-</option>
                        @foreach ( $jdeptos as $j )
                            <option value="{{$j->id}}"
                                {{(isset($carrera->jdepto_id) && $carrera->jdepto_id == $j->id)?'selected':''}}
                                >{{$j->nombre}} {{$j->apaterno}} {{$j->amaterno}}</option>
                        @endforeach
                    </select>
                    @error('jdepto_id')
                        <div style="color:red;">
                            <strong>* Seleccione un Jefe de Departaento</strong>
                        </div>
                    @enderror
                </div>
            </div>
        </div>
    </div>

    <input class="btn btn-success float-right mt-2" type="submit" value="{{$modo2}}">

    <a class="btn float-end mt-2" style="background-color: #1F5F96; color:white" href="{{route('carreras.index')}}">
        <i class="fas fa-reply"></i> Atras</a>
@stop
