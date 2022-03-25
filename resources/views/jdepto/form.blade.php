<div class="form-row">
    <h1 class="text-center"><strong>{{$modo}} JEFE DE DEPARTAMENTO</strong></h1>

    <div class="col-md-4 mb-3">
        <label for="validationServer01">Apellido Paterno</label>
        <input type="text" class="form-control is-valid" id="apaterno" name="apaterno"
            placeholder="primer apelldo.." value="{{isset($jdepto->apaterno)?$jdepto->apaterno:old('apaterno')}}">
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
            placeholder="segundo apellido.." value="{{isset($jdepto->amaterno)?$jdepto->amaterno:old('amaterno')}}">
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
            placeholder="nombre.." value="{{isset($jdepto->nombre)?$jdepto->nombre:old('nombre')}}">
        @error('nombre')
            <small style="color:red;">* {{$message}}</small>
        @enderror
        <div class="invalid-feedback">
            el campo es obligatorio!
        </div>
    </div>
    <br>
    <div class="col-md-4 mb-3">
        <label for="validationServer04">Deparatmento</label>
        <input type="text" class="form-control is-valid" id="departamento" name="departamento"
            placeholder="departamento.." value="{{isset($jdepto->departamento)?$jdepto->departamento:old('departamento')}}">
        @error('departamento')
            <small style="color:red;">* {{$message}}</small>
        @enderror
        <div class="invalid-feedback">
            el campo es obligatorio!
        </div>
    </div>
    <br>
    <div class="col-md-4 mb-3">
        <label for="validationServer05">Usuario</label>
        <select name="user_id" id="user_id">
            <option selected disabled>-Seleccionar-</option>
            @foreach ( $users as $u )
                <option value="{{$u->id}}"
                    {{(isset($jdepto->user_id) && $jdepto->user_id == $u->id)?'selected':''}}
                    >{{$u->name}}</option>
            @endforeach
        </select>
    </div>
    <br>
</div>

<input type="submit" value="{{$modo}}">
