@extends('adminlte::page')

@section('title', 'Statu')

@section('content_header')
    <h1>{{$modo}} ESTATU</h1>
@stop

@section('content')

    <div class="row">
        <div class="col-sm-12 mb-3">
            <div class="card was-validated shadow border border-primary">
                <div class="card-header text-left" style="background-color: DodgerBlue;">
                    <label for="estado">
                        <strong style="color:white">Estatus:</strong>
                    </label>
                </div>

                <div class="card-body">
                    <input type="text" class="form-control is-valid" id="estado" name="estado"
                        placeholder="escriba el nombre del Estatu.." value="{{isset($statu->estado)?$statu->estado:old('estado')}}" required>
                    <div class="invalid-feedback">
                        <strong>*El campo Estatus es obligatorio.</strong>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <input class="btn btn-success float-right mt-2" type="submit" value="{{$modo2}}">

    <a class="btn btn-dark float-end mt-2" href="{{route('status.index')}}">
        <i class="fas fa-reply"></i> Atras</a>

@stop
