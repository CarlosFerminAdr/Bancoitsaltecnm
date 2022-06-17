<div class="row">

    <div class="col-sm-12 mb-3">
        <div class="card was-validated shadow border border-primary">
            <div class="card-header text-left" style="background-color: #1F5F96;">
                <label for="nombre">
                    <strong style="color:white">DETALLES DEL PROYECTO:</strong>
                </label>
            </div>
            <div class="card-body">
                <div class="row mb-3">
                    <div class="col-md-12">
                        <label for="proyecto" class="form-label" style="color:#1F5F96"><strong>Proyecto:</strong></label>
                        <input type="text" class="form-control is-valid" id="nombre" name="nombre"
                            placeholder="escriba un Nombre.." value="{{isset($acuiculturaon->proyectograma->nombre)?$acuiculturaon->proyectograma->nombre:old('nombre')}}" required readonly>
                        <div class="invalid-feedback">
                            <strong>*El campo Nombre del Proyecto es obligatorio.</strong>
                        </div>
                    </div>
                    <div class="col-md-8"><br>
                        <label for="proyecto" class="form-label" style="color:#1F5F96"><strong>Empresa:</strong></label>
                        <input type="text" class="form-control is-valid" id="empresa" name="empresa"
                            placeholder="primer apelldo.." value="{{isset($acuiculturaon->proyectograma->empresa->nombre)?$acuiculturaon->proyectograma->empresa->nombre:old('nombre')}}" required readonly>
                        <div class="invalid-feedback">
                            <strong>*El campo Empresa es obligatorio.</strong>
                        </div>
                    </div>
                    <div class="col-md-2"><br>
                        <label for="proyecto" class="form-label" style="color:#1F5F96"><strong>No. Alumnos:</strong></label>
                        <input type="number" class="form-control is-valid" id="nalumnos" name="nalumnos" min="0" max="999"
                            placeholder="0.." value="{{isset($acuiculturaon->proyectograma->nalumnos)?$acuiculturaon->proyectograma->nalumnos:old('nalumnos')}}" required readonly>
                        <div class="invalid-feedback">
                            <strong>*El campo número de Alumnos es obligatorio.</strong>
                        </div>
                    </div>
                    <div class="col-md-2"><br>
                        <label for="proyecto" class="form-label" style="color:#1F5F96"><strong>Fecha Limite:</strong></label>
                        <input type="date" class="form-control is-valid" id="flimite" name="flimite"
                            placeholder="primer apelldo.." value="{{isset($acuiculturaon->proyectograma->flimite)?$acuiculturaon->proyectograma->flimite:old('flimite')}}" required readonly>
                        <div class="invalid-feedback">
                            <strong>*El campo Fecha es obligatorio.</strong>
                        </div>
                    </div>
                    <div class="col-md-6"><br>
                        <label for="proyecto" class="form-label" style="color:#1F5F96"><strong>Carrera:</strong></label>
                        <input type="text" class="form-control is-valid" id="carrera" name="carrera"
                            placeholder="primer apelldo.." value="{{isset($acuiculturaon->carrera->nombre)?$acuiculturaon->carrera->nombre:old('nombre')}}" required readonly>
                        <div class="invalid-feedback">
                            <strong>*El campo Carrera es obligatorio.</strong>
                        </div>
                    </div>
                    <div class="col-md-6"><br>
                        <label for="proyecto" class="form-label" style="color:#1F5F96"><strong>Periodo:</strong></label><br>
                        @foreach ( $periodos as $pe )
                        <label class="mr-4">
                            <input type="radio" name="periodo_id" value="{{$pe->id}}"
                            {{(isset($pe->id) && $pe->id == $acuiculturaon->periodo_id)?'checked':''}}>{{$pe->nombre}}
                        </label>
                        @endforeach
                    </div>
                    {{------------------------------------SECCIÓN DEL PROYECTO-------------------------------}}
                    <div class="col-md-6"><br>
                        <label for="proyecto" class="form-label" style="color:#1F5F96"><strong>Objetivo del Proyecto:</strong></label>
                        <textarea name="objetivo" id="objetivo" rows="3" class="form-control"
                            required readonly>{{isset($acuiculturaon->objetivo)?$acuiculturaon->objetivo:old('objetivo')}}</textarea>
                        <div class="invalid-feedback">
                            <strong>*El campo Objetivo es obligatorio.</strong>
                        </div>
                    </div>
                    <div class="col-md-6"><br>
                        <label for="proyecto" class="form-label" style="color:#1F5F96"><strong>Problematica del Proyecto:</strong></label>
                        <textarea name="problematica" id="problematica" rows="3" class="form-control"
                            required readonly>{{isset($acuiculturaon->problematica)?$acuiculturaon->problematica:old('problematica')}}</textarea>
                        <div class="invalid-feedback">
                            <strong>*El campo Problematica es obligatorio.</strong>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="col-sm-12 mb-3">
        <div class="card was-validated shadow border border-primary">
            <div class="card-header text-left" style="background-color: #1F5F96;">
                <label for="status">
                    <strong style="color:white">ESTADO DEL PROYECTO:</strong>
                </label>
            </div>
            <div class="card-body">
                @foreach ( $estados as $e )
                <label class="mr-4">
                    <input type="radio" name="status" value="{{$e->id}}"
                    {{(isset($e->id) && $e->id == $acuiculturaon->status)?'checked':''}}>{{$e->tipo_status}}
                </label>
                @endforeach
            </div>
        </div>
    </div>

</div>

<input class="btn btn-success float-right mt-2" type="submit" value="{{$modo}}">
@can('acuiculturaon.index')
    <a class="btn float-end mt-2" style="background-color: #1F5F96; color:white" href="{{route('acuiculturaon.index')}}">
        <i class="fas fa-reply"></i> Atras</a>
@endcan
