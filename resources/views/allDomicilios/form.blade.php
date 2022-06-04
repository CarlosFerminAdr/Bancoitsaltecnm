@extends('adminlte::page')

@section('title', 'Domicilio')

@section('content_header')
    <h1>{{$modo}} DOMICILIO</h1>
@stop

@section('content')
    @if ($errors->has('user_id'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert" style="color:white">
            <strong>{{ $errors->first('user_id') }}</strong>
            <button type="button"class="close" data-dismiss="alert" aria-label="close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

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
                        placeholder="escriba la Calle.." value="{{isset($allDomicilio->calle)?$allDomicilio->calle:old('calle')}}" required>
                     @error('calle')
                        <div style="color:red;">
                            <strong>* {{ $message }}</strong>
                        </div>
                    @enderror
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
                        placeholder="ej. S/N.." value="{{isset($allDomicilio->numero)?$allDomicilio->numero:old('numero')}}" required>
                    @error('numero')
                        <div style="color:red;">
                            <strong>* {{ $message }}</strong>
                        </div>
                    @enderror
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
                    <input type="number" min="0" max="99999" class="form-control is-valid" id="cp" name="cp"
                        placeholder="C.P.." value="{{isset($allDomicilio->cp)?$allDomicilio->cp:old('cp')}}" required>
                    @error('cp')
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
                    <label for="colonia">
                        <strong style="color:white">Colonia:</strong>
                    </label>
                </div>

                <div class="card-body">
                    <input type="text" class="form-control is-valid" id="colonia" name="colonia"
                        placeholder="escriba la Colonia.." value="{{isset($allDomicilio->colonia)?$allDomicilio->colonia:old('colonia')}}" required>
                    @error('colonia')
                        <div style="color:red;">
                            <strong>* {{ $message }}</strong>
                        </div>
                    @enderror
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
                        placeholder="escriba el Municipio.." value="{{isset($allDomicilio->municipio)?$allDomicilio->municipio:old('municipio')}}" required>
                    @error('municipio')
                        <div style="color:red;">
                            <strong>* {{ $message }}</strong>
                        </div>
                    @enderror
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
                        placeholder="escriba el Estado.." value="{{isset($allDomicilio->estado)?$allDomicilio->estado:old('estado')}}" required>
                    @error('estado')
                        <div style="color:red;">
                            <strong>* {{ $message }}</strong>
                        </div>
                    @enderror
                </div>
            </div>
        </div>

        <input type="hidden" name="user_id" value="">
    </div>

    <input class="btn btn-success float-right mt-2"type="submit" value="{{$modo2}}">
    @can('allDomicilios.index')
    <a class="btn float-end mt-2" style="background-color: #1F5F96; color:white" href="{{route('allDomicilios.index')}}">
        <i class="fas fa-reply"></i> Atras</a>
    @endcan
@stop
