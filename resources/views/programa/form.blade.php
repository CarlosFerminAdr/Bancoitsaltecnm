<div class="row">

    <div class="col-sm-10 mb-3">
        <div class="card was-validated shadow border border-primary">
            <div class="card-header text-left" style="background-color: #1F5F96;">
                <label for="nombre">
                    <strong style="color:white">Nombre del Programa:</strong>
                </label>
            </div>
            <div class="card-body">
                <input type="text" class="form-control is-valid" id="nombre" name="nombre"
                    placeholder="escriba un Nombre.." value="{{isset($programa->proyectograma->nombre)?$programa->proyectograma->nombre:old('nombre')}}" required>
                <div class="invalid-feedback">
                    <strong>*El campo Nombre del Programa es obligatorio.</strong>
                </div>
            </div>
        </div>
    </div>

    <div class="col-sm-2 mb-3">
        <div class="card was-validated shadow border border-primary">
            <div class="card-header text-left" style="background-color: #1F5F96;">
                <label for="nalumnos">
                    <strong style="color:white">No. Alumnos:</strong>
                </label>
            </div>
            <div class="card-body">
                <input type="number" class="form-control is-valid" id="nalumnos" name="nalumnos" min="0" max="999"
                    placeholder="0.." value="{{isset($programa->proyectograma->nalumnos)?$programa->proyectograma->nalumnos:old('nalumnos')}}" required>
                <div class="invalid-feedback">
                    <strong>*El campo número de Alumnos es obligatorio.</strong>
                </div>
            </div>
        </div>
    </div>

    <div class="col-sm-9 mb-3">
        <div class="card was-validated shadow border border-primary">
            <div class="card-header text-left" style="background-color: #1F5F96;">
                <label for="empresa_id">
                    <strong style="color:white">Empresa Responsable del Programa:</strong>
                </label>
            </div>
            <div class="card-body">
                <select class="custom-select" name="empresa_id" id="empresa_id" required>
                    <option value="">-Seleccionar-</option>
                        @foreach ( $empresas as $e )
                        <option value="{{$e->id}}"
                            {{(isset($programa->proyectograma->empresa_id) && $programa->proyectograma->empresa_id == $e->id)?'selected':''}}
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
            <div class="card-header text-left" style="background-color: #1F5F96;">
                <label for="flimite">
                    <strong style="color:white">Fecha Limite:</strong>
                </label>
            </div>
            <div class="card-body">
                <input type="date" class="form-control is-valid" id="flimite" name="flimite"
                    placeholder="primer apelldo.." value="{{isset($programa->proyectograma->flimite)?$programa->proyectograma->flimite:old('flimite')}}" required>
                <div class="invalid-feedback">
                    <strong>*El campo Fecha es obligatorio.</strong>
                </div>
            </div>
        </div>
    </div>

    <div class="col-sm-12 mb-3">
        <div class="card was-validated shadow border border-primary">
            <div class="card-header text-left" style="background-color: #1F5F96;">
                <label for="carrera_id">
                    <strong style="color:white">Programa enfocado a la Carrera:</strong>
                </label>
            </div>
            <div class="card-body">
                @foreach ( $carreras as $ca )
                <label class="mr-4">
                    <input type="checkbox" name="carreras[]" value="{{$ca->id}}">{{$ca->nombre}}
                </label>
                @endforeach
            </div>
        </div>
    </div>

    <div class="col-sm-6 mb-3">
        <div class="card was-validated shadow border border-primary">
            <div class="card-header text-left" style="background-color: #1F5F96;">
                <label for="periodo_id">
                    <strong style="color:white">Periodo del Programa:</strong>
                </label>
            </div>
            <div class="card-body">
                @foreach ( $periodos as $pe )
                <label class="mr-4">
                    <input type="checkbox" name="periodos[]" value="{{$pe->id}}">{{$pe->nombre}}
                </label>
                @endforeach
            </div>
        </div>
    </div>

    <div class="col-sm-6 mb-3">
        <div class="card was-validated shadow border border-primary">
            <div class="card-header text-left" style="background-color: #1F5F96;">
                <label for="status">
                    <strong style="color:white">Estado del Programa:</strong>
                </label>
            </div>
            <div class="card-body">
                @foreach ( $estados as $e )
                <label class="mr-4">
                    <input type="radio" name="status" value="{{$e->id}}">{{$e->tipo_status}}
                </label>
                @endforeach
            </div>
        </div>
    </div>

    {{------------------------------------SECCIÓN DEL PROGRAMA-------------------------------}}

    <div class="col-sm-9 mb-3">
        <div class="card was-validated shadow border border-primary">
            <div class="card-header text-left" style="background-color: #1F5F96;">
                <label for="actividades">
                    <strong style="color:white">Actividades:</strong>
                </label>
            </div>
            <div class="card-body">
                <textarea name="actividades" id="actividades" rows="4" class="form-control"
                    required>{{isset($programa->actividades)?$programa->actividades:old('actividades')}}</textarea>
                <div class="invalid-feedback">
                    <strong>*El campo Actividades es obligatorio.</strong>
                </div>
            </div>
        </div>
    </div>

    <div class="col-sm-3 mb-3">
        <div class="card was-validated shadow border border-primary">
            <div class="card-header text-left" style="background-color: #1F5F96;">
                <label for="tipo_id">
                    <strong style="color:white">Tipo de Programa:</strong>
                </label>
            </div>
            <div class="card-body">
                <select class="custom-select" name="tipo_id" id="tipo_id" required>
                    <option value="">-Seleccionar-</option>
                    @foreach ( $tipos as $t )
                        <option value="{{$t->id}}"
                            {{(isset($programa->tipo_id) && $programa->tipo_id == $t->id)?'selected':''}}
                            >{{$t->tipo_programa}}</option>
                    @endforeach
                </select>
                <div class="invalid-feedback">
                    <strong>*El campo tipo de Programa es obligatorio.</strong>
                </div>
            </div>
        </div>
    </div>

</div>

<input class="btn btn-success float-right mt-2" type="submit" value="{{$modo}}">

<a class="btn float-end mt-2" style="background-color: #1F5F96; color:white" href="{{route('programas.index')}}">
    <i class="fas fa-reply"></i> Atras</a>
