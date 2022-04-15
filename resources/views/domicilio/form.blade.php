@extends('adminlte::page')

@section('title', 'Domicilio')

@section('content_header')
    <h1>{{$modo}} DOMICILIO</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-sm-6 mb-3">
            <div class="card was-validated shadow border border-primary">
                <div class="card-header text-left" style="background-color: #1F5F96;">
                    <label for="calle">
                        <strong style="color:white">Calle:</strong>
                    </label>
                </div>

                <div class="card-body">
                    <input type="text" class="form-control is-valid" id="calle" name="calle"
                        placeholder="escriba la Calle.." value="{{isset($domicilio->calle)?$domicilio->calle:old('calle')}}" required>
                    <div class="invalid-feedback">
                        <strong>*El campo Calle es obligatorio.</strong>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-3 mb-3">
            <div class="card was-validated shadow border border-primary">
                <div class="card-header text-left" style="background-color: #1F5F96;">
                    <label for="numero">
                        <strong style="color:white">Numero de Calle:</strong>
                    </label>
                </div>

                <div class="card-body">
                    <input type="text" class="form-control is-valid" id="numero" name="numero"
                        placeholder="ej. S/N.." value="{{isset($domicilio->numero)?$domicilio->numero:old('numero')}}" required>
                    <div class="invalid-feedback">
                        <strong>*El campo Numero de Calle es obligatorio.</strong>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-3 mb-3">
            <div class="card was-validated shadow border border-primary">
                <div class="card-header text-left" style="background-color: #1F5F96;">
                    <label for="cp">
                        <strong style="color:white">Codigo Postal:</strong>
                    </label>
                </div>

                <div class="card-body">
                    <input type="text" class="form-control is-valid" id="cp" name="cp"
                        placeholder="C.P.." value="{{isset($domicilio->cp)?$domicilio->cp:old('cp')}}" required>
                    <div class="invalid-feedback">
                        <strong>*El campo Codigo Postal es obligatorio.</strong>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-6 mb-3">
            <div class="card was-validated shadow border border-primary">
                <div class="card-header text-left" style="background-color: #1F5F96;">
                    <label for="colonia">
                        <strong style="color:white">Colonia:</strong>
                    </label>
                </div>

                <div class="card-body">
                    <input type="text" class="form-control is-valid" id="colonia" name="colonia"
                        placeholder="escriba la Colonia.." value="{{isset($domicilio->colonia)?$domicilio->colonia:old('colonia')}}" required>
                    <div class="invalid-feedback">
                        <strong>*El campo Colonia es obligatorio.</strong>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-3 mb-3">
            <div class="card was-validated shadow border border-primary">
                <div class="card-header text-left" style="background-color: #1F5F96;">
                    <label for="municipio">
                        <strong style="color:white">Municipio:</strong>
                    </label>
                </div>

                <div class="card-body">
                    <input type="text" class="form-control is-valid" id="municipio" name="municipio"
                        placeholder="escriba el Municipio.." value="{{isset($domicilio->municipio)?$domicilio->municipio:old('municipio')}}" required>
                    <div class="invalid-feedback">
                        <strong>*El campo Municipio es obligatorio.</strong>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-3 mb-3">
            <div class="card was-validated shadow border border-primary">
                <div class="card-header text-left" style="background-color: #1F5F96;">
                    <label for="estado">
                        <strong style="color:white">Estado:</strong>
                    </label>
                </div>

                <div class="card-body">
                    <input type="text" class="form-control is-valid" id="estado" name="estado"
                        placeholder="escriba el Estado.." value="{{isset($domicilio->estado)?$domicilio->estado:old('estado')}}" required>
                    <div class="invalid-feedback">
                        <strong>*El campo Estado es obligatorio.</strong>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <input class="btn btn-success float-right mt-2"type="submit" value="{{$modo2}}">

    <a class="btn float-end mt-2" style="background-color: #1F5F96; color:white" href="{{route('domicilios.index')}}">
        <i class="fas fa-reply"></i> Atras</a>

@stop
