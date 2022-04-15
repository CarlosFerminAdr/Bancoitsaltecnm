<div class="row">

    <div class="col-sm-10 mb-3">
        <div class="card was-validated shadow border border-primary">
            <div class="card-header text-left" style="background-color: #1F5F96;">
                <label for="nombre">
                    <strong style="color:white">Nombre del Proyecto:</strong>
                </label>
            </div>
            <div class="card-body">
                <input type="text" class="form-control is-valid" id="nombre" name="nombre"
                    placeholder="escriba un Nombre.." value="{{isset($proyecto->proyectograma->nombre)?$proyecto->proyectograma->nombre:old('nombre')}}" required>
                <div class="invalid-feedback">
                    <strong>*El campo Nombre del Proyecto es obligatorio.</strong>
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
                    placeholder="0.." value="{{isset($proyecto->proyectograma->nalumnos)?$proyecto->proyectograma->nalumnos:old('nalumnos')}}" required>
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
                    <strong style="color:white">Empresa Responsable del Proyecto:</strong>
                </label>
            </div>
            <div class="card-body">
                <select class="custom-select" name="empresa_id" id="empresa_id" required>
                    <option value="">-Seleccionar-</option>
                        @foreach ( $empresas as $e )
                        <option value="{{$e->id}}"
                            {{(isset($proyecto->proyectograma->empresa_id) && $proyecto->proyectograma->empresa_id == $e->id)?'selected':''}}
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
                    placeholder="primer apelldo.." value="{{isset($proyecto->proyectograma->flimite)?$proyecto->proyectograma->flimite:old('flimite')}}" required>
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
                    <strong style="color:white">Proyecto enfocado a la Carrera:</strong>
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
                    <strong style="color:white">Periodo del Proyecto:</strong>
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
                    <strong style="color:white">Estado del Proyecto:</strong>
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

    {{------------------------------------SECCIÓN DEL PROYECTO-------------------------------}}

    <div class="col-sm-12 mb-3">
        <div class="card was-validated shadow border border-primary">
            <div class="card-header text-left" style="background-color: #1F5F96;">
                <label for="objetivo">
                    <strong style="color:white">Objetivo del Proyecto:</strong>
                </label>
            </div>
            <div class="card-body">
                <textarea name="objetivo" id="objetivo" rows="4" class="form-control"
                    required>{{isset($proyecto->objetivo)?$proyecto->objetivo:old('objetivo')}}</textarea>
                <div class="invalid-feedback">
                    <strong>*El campo Objetivo es obligatorio.</strong>
                </div>
            </div>
        </div>
    </div>

    <div class="col-sm-12 mb-3">
        <div class="card was-validated shadow border border-primary">
            <div class="card-header text-left" style="background-color: #1F5F96;">
                <label for="problematica">
                    <strong style="color:white">Problematica del Proyecto:</strong>
                </label>
            </div>
            <div class="card-body">
                <textarea name="problematica" id="problematica" rows="4" class="form-control"
                    required>{{isset($proyecto->problematica)?$proyecto->problematica:old('problematica')}}</textarea>
                <div class="invalid-feedback">
                    <strong>*El campo Problematica es obligatorio.</strong>
                </div>
            </div>
        </div>
    </div>

</div>

<input class="btn btn-success float-right mt-2" type="submit" value="{{$modo}}">

<a class="btn float-end mt-2" style="background-color: #1F5F96; color:white" href="{{route('proyectos.index')}}">
    <i class="fas fa-reply"></i> Atras</a>

