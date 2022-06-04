@extends('adminlte::page')

@section('title', 'Empresa')

@section('content_header')
    <h1>{{$modo}} EMPRESA</h1>
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
        <div class="col-sm-12 mb-3">
            <div class="card was-validated shadow border border-primary">
                <div class="card-header text-left" style="background-color: #1F5F96;">
                    <label for="domicilio_id">
                        <strong style="color:white">Domicilio:</strong>
                    </label>
                </div>
                <div class="card-body">
                    <div class="input-group">
                        <select class="custom-select" name="domicilio_id" id="domicilio_id" required>
                            <option value="">-Seleccionar-</option>
                            @foreach ( $domicilios as $d )
                                <option value="{{$d->id}}"
                                    {{(isset($empresa->domicilio_id) && $empresa->domicilio_id == $d->id)?'selected':''}}
                                    >{{$d->calle}} {{$d->numero}} {{$d->colonia}} {{$d->cp}} {{$d->municipio}} {{$d->estado}}</option>
                            @endforeach
                        </select>
                        <div class="input-group-prepend">
                            <a class="btn" style="background-color: #1F5F96; color:white" href="{{route('domicilios.create')}}">
                                <i class="fas fa-plus-square"></i> Registrar</a>
                        </div>
                        @error('domicilio_id')
                            <div style="color:red;">
                                <strong>* {{ $message }}</strong>
                            </div>
                        @enderror
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-6 mb-3">
            <div class="card was-validated shadow border border-primary">
                <div class="card-header text-left" style="background-color: #1F5F96;">
                    <label for="nombre">
                        <strong style="color:white">Nombre de la Empresa:</strong>
                    </label>
                </div>

                <div class="card-body">
                    <input type="text" class="form-control is-valid" id="nombre" name="nombre"
                        placeholder="escriba el nombre de la Empresa.." value="{{isset($empresa->nombre)?$empresa->nombre:old('nombre')}}" required>
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
                    <label for="titular">
                        <strong style="color:white">Titular de la Empresa:</strong>
                    </label>
                </div>

                <div class="card-body">
                    <input type="text" class="form-control is-valid" id="titular" name="titular"
                        placeholder="escriba el nombre del Titular.." value="{{isset($empresa->titular)?$empresa->titular:old('titular')}}" required>
                    @error('titular')
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
                    <label for="correo">
                        <strong style="color:white">Correo Electrónico:</strong>
                    </label>
                </div>

                <div class="card-body">
                    <input type="email" class="form-control is-valid" id="correo" name="correo"
                        placeholder="escriba el Correo Electrónico.." value="{{isset($empresa->correo)?$empresa->correo:old('correo')}}" required>
                    @error('correo')
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
                    <label for="telefono">
                        <strong style="color:white">Teléfono:</strong>
                    </label>
                </div>

                <div class="card-body">
                    <input type="number" min="0" max="9999999999" class="form-control is-valid" id="telefono" name="telefono"
                        placeholder="escriba el Número.." value="{{isset($empresa->telefono)?$empresa->telefono:old('telefono')}}" required>
                    @error('telefono')
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
                    <label for="giro">
                        <strong style="color:white">Giro, Ramo o Sector:</strong>
                    </label>
                </div>

                <div class="card-body">
                    <input type="text" class="form-control is-valid" id="giro" name="giro"
                        placeholder="escriba Giro, Ramo o Sector.." value="{{isset($empresa->giro)?$empresa->giro:old('giro')}}" required>
                    @error('giro')
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
                    <label for="rfc">
                        <strong style="color:white">RFC de la Empresa:</strong>
                    </label>
                </div>

                <div class="card-body">
                    <input type="text" class="form-control is-valid" id="rfc" name="rfc"
                        placeholder="escriba el RFC de la Empresa.." value="{{isset($empresa->rfc)?$empresa->rfc:old('rfc')}}" required>
                    @error('rfc')
                        <div style="color:red;">
                            <strong>* {{ $message }}</strong>
                        </div>
                    @enderror
                </div>
            </div>
        </div>

        <input type="hidden" name="user_id" value="{{auth()->user()->id}}">
    </div>

    <input class="btn btn-success float-right mt-2" type="submit" value="{{$modo2}}">
    @can('empresas.index')
    <a class="btn float-end mt-2" style="background-color: #1F5F96; color:white" href="{{route('empresas.index')}}">
        <i class="fas fa-reply"></i> Atras</a>
    @endcan
@stop
