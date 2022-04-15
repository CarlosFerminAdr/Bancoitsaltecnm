@extends('adminlte::page')

@section('title', 'Proyectograma')

@section('content_header')
    <h1>{{$titulo}} BANCO DE PROYECTOS Y PROGRAMAS</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-sm-10 mb-3">
            <div class="card was-validated shadow border border-primary">
                <div class="card-header text-left" style="background-color: DodgerBlue;">
                    <label for="nombre">
                        <strong style="color:white">Nombre del Proyecto:</strong>
                    </label>
                </div>

                <div class="card-body">
                    <input type="text" class="form-control is-valid" id="nombre" name="nombre"
                        placeholder="escriba un Nombre.." value="{{isset($proyectograma->nombre)?$proyectograma->nombre:old('nombre')}}" required>
                    <div class="invalid-feedback">
                        <strong>*El campo Nombre del Proyecto es obligatorio.</strong>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-2 mb-3">
            <div class="card was-validated shadow border border-primary">
                <div class="card-header text-left" style="background-color: DodgerBlue;">
                    <label for="nalumnos">
                        <strong style="color:white">No. Alumnos:</strong>
                    </label>
                </div>

                <div class="card-body">
                    <input type="number" class="form-control is-valid" id="nalumnos" name="nalumnos" min="0" max="999"
                        placeholder="0.." value="{{isset($proyectograma->nalumnos)?$proyectograma->nalumnos:old('nalumnos')}}" required>
                    <div class="invalid-feedback">
                        <strong>*El campo número de Alumnos es obligatorio.</strong>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-6 mb-3">
            <div class="card was-validated shadow border border-primary">
                <div class="card-header text-left" style="background-color: DodgerBlue;">
                    <label for="empresa_id">
                        <strong style="color:white">Empresa:</strong>
                    </label>
                </div>
                <div class="card-body">
                    <select class="custom-select" name="empresa_id" id="empresa_id" required>
                        <option value="">-Seleccionar-</option>
                        @foreach ( $empresas as $e )
                            <option value="{{$e->id}}"
                                {{(isset($proyectograma->empresa_id) && $proyectograma->empresa_id == $e->id)?'selected':''}}
                                >{{$e->nombre}}</option>
                        @endforeach
                    </select>
                    <div class="invalid-feedback">
                        <strong>*El campo Empresa es obligatorio.</strong>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-3 mb-3">
            <div class="card was-validated shadow border border-primary">
                <div class="card-header text-left" style="background-color: DodgerBlue;">
                    <label for="flimite">
                        <strong style="color:white">Fecha Limite:</strong>
                    </label>
                </div>

                <div class="card-body">
                    <input type="date" class="form-control is-valid" id="flimite" name="flimite"
                        placeholder="primer apelldo.." value="{{isset($proyectograma->flimite)?$proyectograma->flimite:old('flimite')}}" required>
                    <div class="invalid-feedback">
                        <strong>*El campo Fecha es obligatorio.</strong>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-3 mb-3">
            <div class="card was-validated shadow border border-primary">
                <div class="card-header text-left" style="background-color: DodgerBlue;">
                    <label for="estado_id">
                        <strong style="color:white">Estatus:</strong>
                    </label>
                </div>
                <div class="card-body">
                    <select class="custom-select" name="estado_id" id="estado_id" required>
                        <option value="">-Seleccionar-</option>
                        @foreach ( $estados as $e )
                            <option value="{{$e->id}}"
                                {{(isset($proyectograma->estado_id) && $proyectograma->estado_id == $e->id)?'selected':''}}
                                >{{$e->tipo_status}}</option>
                        @endforeach
                    </select>
                    <div class="invalid-feedback">
                        <strong>*El campo Estatus es obligatorio.</strong>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <input class="btn btn-success float-right mt-2" type="submit" value="{{$modo}}">

    <a class="btn btn-dark float-end mt-2" href="{{route('proyectogramas.index')}}">
        <i class="fas fa-reply"></i> Atras</a>

@stop
