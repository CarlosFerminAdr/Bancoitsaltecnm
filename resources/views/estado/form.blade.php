@extends('adminlte::page')

@section('title', 'Estatus')

@section('content_header')
    <h1>{{$modo}} ESTATUS</h1>
@stop

@section('content')
    @if (Session('mensaje') == 'Domicilio agregado corectamente!')
        <div class="alert alert-success alert-dismissible fade show" role="alert" style="color:black">
            <strong>{{Session('mensaje')}}</strong>
            <button type="button"class="close" data-dismiss="alert" aria-label="close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    <div class="row">
        <div class="col-sm-12 mb-3">
            <div class="card was-validated shadow border border-primary">
                <div class="card-header text-left" style="background-color: #1F5F96;">
                    <label for="tipo_status">
                        <strong style="color:white">Nombre del Estatus:</strong>
                    </label>
                </div>

                <div class="card-body">
                    <input type="text" class="form-control is-valid" id="tipo_status" name="tipo_status"
                        placeholder="escriba el Estatus.." value="{{isset($estado->tipo_status)?$estado->tipo_status:old('tipo_status')}}" required>
                    <div class="invalid-feedback">
                        <strong>*El campo Estataus es obligatorio.</strong>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <input class="btn btn-success float-right mt-2" type="submit" value="{{$modo2}}">

    <a class="btn float-end mt-2" style="background-color: #1F5F96; color:white" href="{{route('estados.index')}}">
        <i class="fas fa-reply"></i> Atras</a>
@stop
