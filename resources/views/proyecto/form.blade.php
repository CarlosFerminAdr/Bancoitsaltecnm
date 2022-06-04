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
                    placeholder="0.." value="{{isset($proyecto->proyectograma->nalumnos)?$proyecto->proyectograma->nalumnos:old('nalumnos')}}" required>
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
                    <strong style="color:white">Empresa Responsable del Proyecto:</strong>
                </label>
            </div>
            <div class="card-body">
                <div class="input-group">
                    <select class="custom-select" name="empresa_id" id="empresa_id" required>
                        <option value="">-Seleccionar-</option>
                            @foreach ( $empresas as $e )
                            <option value="{{$e->id}}"
                                {{(isset($proyecto->proyectograma->empresa_id) && $proyecto->proyectograma->empresa_id == $e->id)?'selected':''}}
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
                    placeholder="primer apelldo.." value="{{isset($proyecto->proyectograma->flimite)?$proyecto->proyectograma->flimite:old('flimite')}}" required>
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
                    <strong style="color:white">Proyecto enfocado a la Carrera:</strong>
                </label>
            </div>
            <div class="card-body">
                @foreach ( $carreras as $ca )
                    <label class="mr-4">
                        @if (isset($proyecto->carrera_id))
                        <input type="radio" name="carrera_id" value="{{$ca->id}}"
                            {{(isset($ca->id) && $ca->id == $proyecto->carrera_id)?'checked':''}}>{{$ca->nombre}}
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
                    <strong style="color:white">Periodo del Proyecto:</strong>
                </label>
            </div>
            <div class="card-body">
                @foreach ( $periodos as $pe )
                    <label class="mr-4">
                        @if (isset($proyecto->periodo_id))
                            <input type="radio" name="periodo_id" value="{{$pe->id}}"
                            {{(isset($pe->id) && $pe->id == $proyecto->periodo_id)?'checked':''}}>{{$pe->nombre}}
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

    {{------------------------------------SECCIÓN DEL PROYECTO-------------------------------}}

    <div class="col-sm-12 mb-3">
        <div class="card was-validated shadow border border-primary">
            <div class="card-header text-left" style="background-color: #1F5F96;">
                <label for="objetivo">
                    <strong style="color:white">Objetivo del Proyecto:</strong>
                </label>
            </div>
            <div class="card-body">
                <textarea name="objetivo" id="objetivo" rows="3" class="form-control"
                    required>{{isset($proyecto->objetivo)?$proyecto->objetivo:old('objetivo')}}</textarea>
                @error('objetivo')
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
                <label for="problematica">
                    <strong style="color:white">Problematica del Proyecto:</strong>
                </label>
            </div>
            <div class="card-body">
                <textarea name="problematica" id="problematica" rows="3" class="form-control"
                    required>{{isset($proyecto->problematica)?$proyecto->problematica:old('problematica')}}</textarea>
                @error('problematica')
                    <div style="color:red;">
                        <strong>* {{ $message }}</strong>
                    </div>
                @enderror
            </div>
        </div>
    </div>

</div>

<input class="btn btn-success float-right mt-2" type="submit" value="{{$modo}}">
@can('proyectos.index')
    <a class="btn float-end mt-2" style="background-color: #1F5F96; color:white" href="{{route('proyectos.index')}}">
        <i class="fas fa-reply"></i> Atras</a>
@endcan
@can('admin.proyectos')
    <a class="btn float-end mt-2" style="background-color: #1F5F96; color:white" href="{{route('admin.proyectos')}}">
        <i class="fas fa-reply"></i> Atras</a>
@endcan
