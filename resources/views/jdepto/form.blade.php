@extends('adminlte::page')

@section('title', 'Jefe de Departamento')

@section('content_header')
    <h1>{{$modo}} JEFE DE DEPARTAMENTO</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-sm-6 mb-3">
            <div class="card was-validated shadow border border-primary">
                <div class="card-header text-left" style="background-color: #1F5F96;">
                    <label for="apaterno">
                        <strong style="color:white">Apellido Paterno:</strong>
                    </label>
                </div>

                <div class="card-body">
                    <input type="text" class="form-control is-valid" id="apaterno" name="apaterno"
                        placeholder="escriba su primer Apellido.." value="{{isset($jdepto->apaterno)?$jdepto->apaterno:old('apaterno')}}" required>
                    <div class="invalid-feedback">
                        <strong>*El campo Apellido paterno es obligatorio.</strong>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-6 mb-3">
            <div class="card was-validated shadow border border-primary">
                <div class="card-header text-left" style="background-color: #1F5F96;">
                    <label for="amaterno">
                        <strong style="color:white">Apellido Materno:</strong>
                    </label>
                </div>

                <div class="card-body">
                    <input type="text" class="form-control is-valid" id="amaterno" name="amaterno"
                        placeholder="escriba su segundo Apellido.." value="{{isset($jdepto->amaterno)?$jdepto->amaterno:old('amaterno')}}" required>
                    <div class="invalid-feedback">
                        <strong>*El campo Apellido materno es obligatorio.</strong>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-6 mb-3">
            <div class="card was-validated shadow border border-primary">
                <div class="card-header text-left" style="background-color: #1F5F96;">
                    <label for="nombre">
                        <strong style="color:white">Nombre:</strong>
                    </label>
                </div>

                <div class="card-body">
                    <input type="text" class="form-control is-valid" id="nombre" name="nombre"
                        placeholder="escriba su Nombre.." value="{{isset($jdepto->nombre)?$jdepto->nombre:old('nombre')}}" required>
                    <div class="invalid-feedback">
                        <strong>*El campo Nombre es obligatorio.</strong>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-6 mb-3">
            <div class="card was-validated shadow border border-primary">
                <div class="card-header text-left" style="background-color: #1F5F96;">
                    <label for="departamento">
                        <strong style="color:white">Deparatmento:</strong>
                    </label>
                </div>

                <div class="card-body">
                    <input type="text" class="form-control is-valid" id="departamento" name="departamento"
                        placeholder="escriba su área o Deprtamento.." value="{{isset($jdepto->departamento)?$jdepto->departamento:old('departamento')}}" required>
                    <div class="invalid-feedback">
                        <strong>*El campo Deparatmento es obligatorio.</strong>
                    </div>
                </div>
            </div>
        </div>

        <input type="hidden" name="user_id" value="{{auth()->user()->id}}">

    </div>

    <input class="btn btn-success float-right mt-2" type="submit" value="{{$modo2}}">

    <a class="btn float-end mt-2" style="background-color: #1F5F96; color:white" href="{{route('jdeptos.index')}}">
        <i class="fas fa-reply"></i> Atras</a>
@stop
