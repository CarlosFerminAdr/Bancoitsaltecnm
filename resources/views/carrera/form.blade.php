<div class="form-row">
    <h1 class="text-center"><strong>{{$modo}} CARRERA</strong></h1>

    <div class="col-md-4 mb-3">
        <label for="validationServer03">Nombre</label>
        <input type="text" class="form-control is-valid" id="nombre" name="nombre"
            placeholder="nombre.." value="{{isset($carrera->nombre)?$carrera->nombre:old('nombre')}}">
        @error('nombre')
            <small style="color:red;">* {{$message}}</small>
        @enderror
        <div class="invalid-feedback">
            el campo es obligatorio!
        </div>
    </div>
    <br>
    <div class="col-md-4 mb-3">
        <label for="validationServer05">Jefe de Departamento</label>
        <select name="jdepto_id" id="jdepto_id">
            <option selected disabled>-Seleccionar-</option>
            @foreach ( $jdeptos as $j )
                <option value="{{$j->id}}"
                    {{(isset($carrera->jdepto_id) && $carrera->jdepto_id == $j->id)?'selected':''}}
                    >{{$j->nombre}}</option>
            @endforeach
        </select>
    </div>
    <br>
</div>

<input type="submit" value="{{$modo}}">
