@extends('adminlte::page')

@section('title', 'Alumno')

@section('content_header')
    <h1>{{$modo}} ALUMNO</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-sm-6 mb-3">
            <div class="card was-validated shadow border border-primary">
                <div class="card-header text-left" style="background-color: DodgerBlue;">
                    <label for="apaterno">
                        <strong style="color:white">Apellido Paterno:</strong>
                    </label>
                </div>

                <div class="card-body">
                    <input type="text" class="form-control is-valid" id="apaterno" name="apaterno"
                        placeholder="escriba su primer Apellido.." value="{{isset($alumno->apaterno)?$alumno->apaterno:old('apaterno')}}" required>
                    <div class="invalid-feedback">
                        <strong>*El campo Apellido Paterno es obligatorio.</strong>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-6 mb-3">
            <div class="card was-validated shadow border border-primary">
                <div class="card-header text-left" style="background-color: DodgerBlue;">
                    <label for="amaterno">
                        <strong style="color:white">Apellido Materno:</strong>
                    </label>
                </div>

                <div class="card-body">
                    <input type="text" class="form-control is-valid" id="amaterno" name="amaterno"
                        placeholder="escriba su segundo Apellido.." value="{{isset($alumno->amaterno)?$alumno->amaterno:old('amaterno')}}" required>
                    <div class="invalid-feedback">
                        <strong>*El campo Apellido Materno es obligatorio.</strong>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-6 mb-3">
            <div class="card was-validated shadow border border-primary">
                <div class="card-header text-left" style="background-color: DodgerBlue;">
                    <label for="nombre">
                        <strong style="color:white">Nombre:</strong>
                    </label>
                </div>

                <div class="card-body">
                    <input type="text" class="form-control is-valid" id="nombre" name="nombre"
                        placeholder="escriba su Nombre.." value="{{isset($alumno->nombre)?$alumno->nombre:old('nombre')}}" required>
                    <div class="invalid-feedback">
                        <strong>*El campo Nombre es obligatorio.</strong>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-6 mb-3">
            <div class="card was-validated shadow border border-primary">
                <div class="card-header text-left" style="background-color: DodgerBlue;">
                    <label for="carrera_id">
                        <strong style="color:white">Carrera:</strong>
                    </label>
                </div>
                <div class="card-body">
                    <select class="custom-select" name="carrera_id" id="carrera_id" required>
                        <option value="">-Seleccionar-</option>
                        @foreach ( $carreras as $c )
                            <option value="{{$c->id}}"
                                {{(isset($alumno->carrera_id) && $alumno->carrera_id == $c->id)?'selected':''}}
                                >{{$c->nombre}}</option>
                        @endforeach
                    </select>
                    <div class="invalid-feedback">
                        <strong>*El campo Carrera es obligatorio.</strong>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-4 mb-3">
            <div class="card was-validated shadow border border-primary">
                <div class="card-header text-left" style="background-color: DodgerBlue;">
                    <label for="correo">
                        <strong style="color:white">Correo Electrónico:</strong>
                    </label>
                </div>

                <div class="card-body">
                    <input type="text" class="form-control is-valid" id="correo" name="correo"
                        placeholder="escriba su Correo Electronico.." value="{{isset($alumno->correo)?$alumno->correo:old('correo')}}" required>
                    <div class="invalid-feedback">
                        <strong>*El campo Correo Electrónico es obligatorio.</strong>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-3 mb-3">
            <div class="card was-validated shadow border border-primary">
                <div class="card-header text-left" style="background-color: DodgerBlue;">
                    <label for="telefono">
                        <strong style="color:white">Teléfono:</strong>
                    </label>
                </div>

                <div class="card-body">
                    <input type="text" class="form-control is-valid" id="telefono" name="telefono"
                        placeholder="escriba su número Telefónico.." value="{{isset($alumno->telefono)?$alumno->telefono:old('telefono')}}" required>
                    <div class="invalid-feedback">
                        <strong>*El campo Teléfono es obligatorio.</strong>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-3 mb-3">
            <div class="card was-validated shadow border border-primary">
                <div class="card-header text-left" style="background-color: DodgerBlue;">
                    <label for="ncontrol">
                        <strong style="color:white">No. Control:</strong>
                    </label>
                </div>

                <div class="card-body">
                    <input type="text" class="form-control is-valid" id="ncontrol" name="ncontrol"
                        placeholder="escriba su número de Control.." value="{{isset($alumno->ncontrol)?$alumno->ncontrol:old('ncontrol')}}" required>
                    <div class="invalid-feedback">
                        <strong>*El campo Número de Control es obligatorio.</strong>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-2 mb-3">
            <div class="card was-validated shadow border border-primary">
                <div class="card-header text-left" style="background-color: DodgerBlue;">
                    <label for="nip">
                        <strong style="color:white">NIP:</strong>
                    </label>
                </div>

                <div class="card-body">
                    <input type="number" class="form-control is-valid" id="nip" name="nip"
                        placeholder="escriba su NIP.." value="{{isset($alumno->nip)?$alumno->nip:old('nip')}}" required>
                    <div class="invalid-feedback">
                        <strong>*El campo NIP es obligatorio.</strong>
                    </div>
                </div>
            </div>
        </div>

        <input type="hidden" name="user_id" value="{{auth()->user()->id}}">
    </div>

    <input class="btn btn-success float-right mt-2" type="submit" value="{{$modo2}}">

    <a class="btn btn-dark float-end mt-2" href="{{route('alumnos.index')}}">
        <i class="fas fa-reply"></i> Atras</a>
@stop
