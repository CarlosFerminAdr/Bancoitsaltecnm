<div class="form-row">
    <h1 class="text-center"><strong>{{$modo}} ALUMNO</strong></h1>

    <div class="col-md-4 mb-3">
        <label for="validationServer01">Apellido Paterno</label>
        <input type="text" class="form-control is-valid" id="apaterno" name="apaterno"
            placeholder="primer apelldo.." value="{{isset($alumno->apaterno)?$alumno->apaterno:old('apaterno')}}">
        @error('apaterno')
            <small style="color:red;">* {{$message}}</small>
        @enderror
        <div class="invalid-feedback">
            el campo es obligatorio!
        </div>
    </div>
    <br>
    <div class="col-md-4 mb-3">
        <label for="validationServer02">Apelido Materno</label>
        <input type="text" class="form-control is-valid" id="amaterno" name="amaterno"
            placeholder="segundo apellido.." value="{{isset($alumno->amaterno)?$alumno->amaterno:old('amaterno')}}">
        @error('amaterno')
            <small style="color:red;">* {{$message}}</small>
        @enderror
        <div class="invalid-feedback">
            el campo es obligatorio!
        </div>
    </div>
    <br>
    <div class="col-md-4 mb-3">
        <label for="validationServer03">Nombre</label>
        <input type="text" class="form-control is-valid" id="nombre" name="nombre"
            placeholder="nombre.." value="{{isset($alumno->nombre)?$alumno->nombre:old('nombre')}}">
        @error('nombre')
            <small style="color:red;">* {{$message}}</small>
        @enderror
        <div class="invalid-feedback">
            el campo es obligatorio!
        </div>
    </div>
    <br>
    <div class="col-md-4 mb-3">
        <label for="validationServer03">No. Control</label>
        <input type="text" class="form-control is-valid" id="ncontrol" name="ncontrol"
            placeholder="nombre.." value="{{isset($alumno->ncontrol)?$alumno->ncontrol:old('ncontrol')}}">
        @error('ncontrol')
            <small style="color:red;">* {{$message}}</small>
        @enderror
        <div class="invalid-feedback">
            el campo es obligatorio!
        </div>
    </div>
    <br>
    <div class="col-md-4 mb-3">
        <label for="validationServer03">NIP</label>
        <input type="text" class="form-control is-valid" id="nip" name="nip"
            placeholder="nombre.." value="{{isset($alumno->nip)?$alumno->nip:old('nip')}}">
        @error('nip')
            <small style="color:red;">* {{$message}}</small>
        @enderror
        <div class="invalid-feedback">
            el campo es obligatorio!
        </div>
    </div>
    <br>
    <div class="col-md-4 mb-3">
        <label for="validationServer03">Correo</label>
        <input type="text" class="form-control is-valid" id="correo" name="correo"
            placeholder="nombre.." value="{{isset($alumno->correo)?$alumno->correo:old('correo')}}">
        @error('correo')
            <small style="color:red;">* {{$message}}</small>
        @enderror
        <div class="invalid-feedback">
            el campo es obligatorio!
        </div>
    </div>
    <br>
    <div class="col-md-4 mb-3">
        <label for="validationServer03">Telefono</label>
        <input type="text" class="form-control is-valid" id="telefono" name="telefono"
            placeholder="nombre.." value="{{isset($alumno->telefono)?$alumno->telefono:old('telefono')}}">
        @error('telefono')
            <small style="color:red;">* {{$message}}</small>
        @enderror
        <div class="invalid-feedback">
            el campo es obligatorio!
        </div>
    </div>
    <br>
    <div class="col-md-4 mb-3">
        <label for="validationServer05">Carrera</label>
        <select name="carrera_id" id="carrera_id">
            <option selected disabled>-Seleccionar-</option>
            @foreach ( $carreras as $c )
                <option value="{{$c->id}}"
                    {{(isset($alumno->carrera_id) && $alumno->carrera_id == $c->id)?'selected':''}}
                    >{{$c->nombre}}</option>
            @endforeach
        </select>
    </div>
    <br>
    <div class="col-md-4 mb-3">
        <label for="validationServer05">Usuario</label>
        <select name="user_id" id="user_id">
            <option selected disabled>-Seleccionar-</option>
            @foreach ( $users as $u )
                <option value="{{$u->id}}"
                    {{(isset($alumno->user_id) && $alumno->user_id == $u->id)?'selected':''}}
                    >{{$u->name}}</option>
            @endforeach
        </select>
    </div>
    <br>
</div>

<input type="submit" value="{{$modo}}">

