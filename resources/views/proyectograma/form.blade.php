<div class="form-row">
    <h1 class="text-center"><strong>{{$titulo}} BANCO DE PROYECTOS Y PROGRAMAS</strong></h1>

    <div class="col-md-4 mb-3">
        <label for="validationServer01">Nombre</label>
        <input type="text" class="form-control is-valid" id="nombre" name="nombre"
            placeholder="primer apelldo.." value="{{isset($proyectograma->nombre)?$proyectograma->nombre:old('nombre')}}">
        @error('nombre')
            <small style="color:red;">* {{$message}}</small>
        @enderror
        <div class="invalid-feedback">
            el campo es obligatorio!
        </div>
    </div>
    <br>
    <div class="col-md-4 mb-3">
        <label for="validationServer01">No. Alumnos</label>
        <input type="number" class="form-control is-valid" id="nalumnos" name="nalumnos" min="0" max="999"
            placeholder="primer apelldo.." readonly value="{{isset($proyectograma->nalumnos)?$proyectograma->nalumnos:old('nalumnos')}}">
        @error('nalumnos')
            <small style="color:red;">* {{$message}}</small>
        @enderror
        <div class="invalid-feedback">
            el campo es obligatorio!
        </div>
    </div>
    <br>
    <div class="col-md-4 mb-3">
        <label for="validationServer01">Fecha Limite</label>
        <input type="date" class="form-control is-valid" id="flimite" name="flimite"
            placeholder="primer apelldo.." value="{{isset($proyectograma->flimite)?$proyectograma->flimite:old('flimite')}}">
        @error('flimite')
            <small style="color:red;">* {{$message}}</small>
        @enderror
        <div class="invalid-feedback">
            el campo es obligatorio!
        </div>
    </div>
    <br>
    <div class="col-md-4 mb-3">
        <label for="validationServer05">Estatus</label>
        <select name="statu_id" id="statu_id">
            <option selected disabled>-Seleccionar-</option>
            @foreach ( $status as $s )
                <option value="{{$s->id}}"
                    {{(isset($proyectograma->statu_id) && $proyectograma->statu_id == $s->id)?'selected':''}}
                    >{{$s->estado}}</option>
            @endforeach
        </select>
    </div>
    <br>
    <div class="col-md-4 mb-3">
        <label for="validationServer05">Empresa</label>
        <select name="empresa_id" id="empresa_id">
            <option selected disabled>-Seleccionar-</option>
            @foreach ( $empresas as $e )
                <option value="{{$e->id}}"
                    {{(isset($proyectograma->empresa_id) && $proyectograma->empresa_id == $e->id)?'selected':''}}
                    >{{$e->nombre}}</option>
            @endforeach
        </select>
    </div>
    <br>
</div>

<input type="submit" value="{{$modo}}">
