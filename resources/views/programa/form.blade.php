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
                @error('nombre')
                    <div style="color:red;">
                        <strong>* {{ $message }}</strong>
                    </div>
                @enderror
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
                @error('nalumnos')
                    <div style="color:red;">
                        <strong>* {{ $message }}</strong>
                    </div>
                @enderror
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
                <div class="input-group">
                    <select class="custom-select" name="empresa_id" id="empresa_id" required>
                        <option value="">-Seleccionar-</option>
                            @foreach ( $empresas as $e )
                            <option value="{{$e->id}}"
                                {{(isset($programa->proyectograma->empresa_id) && $programa->proyectograma->empresa_id == $e->id)?'selected':''}}
                                >{{$e->nombre}}</option>
                        @endforeach
                    </select>
                    <div class="input-group-prepend">
                        <a class="btn" style="background-color: #1F5F96; color:white" href="{{route('empresas.create')}}">
                            <i class="fas fa-plus-square"></i> Registrar</a>
                    </div>
                    @error('empresa_id')
                        <div style="color:red;">
                            <strong>* {{ $message }}</strong>
                        </div>
                    @enderror
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
                @error('flimite')
                    <div style="color:red;">
                        <strong>* {{ $message }}</strong>
                    </div>
                @enderror
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
                        @if (isset($programa->carrera_id))
                        <input type="radio" name="carrera_id" value="{{$ca->id}}"
                            {{(isset($ca->id) && $ca->id == $programa->carrera_id)?'checked':''}}>{{$ca->nombre}}
                        @else
                            <input type="radio" name="carrera_id" value="{{$ca->id}}">{{$ca->nombre}}
                        @endif
                    </label>
                @endforeach
                @error('carrera_id')
                    <div style="color:red;">
                        <strong>* {{ $message }}</strong>
                    </div>
                @enderror
            </div>
        </div>
    </div>

    <div class="col-sm-12 mb-3">
        <div class="card was-validated shadow border border-primary">
            <div class="card-header text-left" style="background-color: #1F5F96;">
                <label for="periodo_id">
                    <strong style="color:white">Periodo del Programa:</strong>
                </label>
            </div>
            <div class="card-body">
                @foreach ( $periodos as $pe )
                <label class="mr-4">
                    @if (isset($programa->periodo_id))
                        <input type="radio" name="periodo_id" value="{{$pe->id}}"
                        {{(isset($pe->id) && $pe->id == $programa->periodo_id)?'checked':''}}>{{$pe->nombre}}
                    @else
                        <input type="radio" name="periodo_id" value="{{$pe->id}}">{{$pe->nombre}}
                    @endif
                </label>
                @endforeach
                @error('periodo_id')
                    <div style="color:red;">
                        <strong>* {{ $message }}</strong>
                    </div>
                @enderror
            </div>
        </div>
    </div>
    {{--
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

    <div class="col-sm-12 mb-3">
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
    --}}

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
                @error('actividades')
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
                @error('tipo_id')
                    <div style="color:red;">
                        <strong>* {{ $message }}</strong>
                    </div>
                @enderror
            </div>
        </div>
    </div>

</div>

<input class="btn btn-success float-right mt-2" type="submit" value="{{$modo}}">
@can('programas.index')
    <a class="btn float-end mt-2" style="background-color: #1F5F96; color:white" href="{{route('programas.index')}}">
        <i class="fas fa-reply"></i> Atras</a>
@endcan
@can('admin.programas')
    <a class="btn float-end mt-2" style="background-color: #1F5F96; color:white" href="{{route('admin.programas')}}">
        <i class="fas fa-reply"></i> Atras</a>
@endcan
