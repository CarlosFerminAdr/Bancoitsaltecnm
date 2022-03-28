<div class="form-row">
    <h1 class="text-center"><strong>{{$modo}} EMPRESA</strong></h1>

    <div class="col-md-4 mb-3">
        <label for="validationServer01">Nombre</label>
        <input type="text" class="form-control is-valid" id="nombre" name="nombre"
            placeholder="primer apelldo.." value="{{isset($empresa->nombre)?$empresa->nombre:old('nombre')}}">
        @error('nombre')
            <small style="color:red;">* {{$message}}</small>
        @enderror
        <div class="invalid-feedback">
            el campo es obligatorio!
        </div>
    </div>
    <br>
    <div class="col-md-4 mb-3">
        <label for="validationServer01">Giro</label>
        <input type="text" class="form-control is-valid" id="giro" name="giro"
            placeholder="primer apelldo.." value="{{isset($empresa->giro)?$empresa->giro:old('giro')}}">
        @error('giro')
            <small style="color:red;">* {{$message}}</small>
        @enderror
        <div class="invalid-feedback">
            el campo es obligatorio!
        </div>
    </div>
    <br>
    <div class="col-md-4 mb-3">
        <label for="validationServer01">RFC</label>
        <input type="text" class="form-control is-valid" id="rfc" name="rfc"
            placeholder="primer apelldo.." value="{{isset($empresa->rfc)?$empresa->rfc:old('rfc')}}">
        @error('rfc')
            <small style="color:red;">* {{$message}}</small>
        @enderror
        <div class="invalid-feedback">
            el campo es obligatorio!
        </div>
    </div>
    <br>
    <div class="col-md-4 mb-3">
        <label for="validationServer01">Correo</label>
        <input type="text" class="form-control is-valid" id="correo" name="correo"
            placeholder="primer apelldo.." value="{{isset($empresa->correo)?$empresa->correo:old('correo')}}">
        @error('correo')
            <small style="color:red;">* {{$message}}</small>
        @enderror
        <div class="invalid-feedback">
            el campo es obligatorio!
        </div>
    </div>
    <br>
    <div class="col-md-4 mb-3">
        <label for="validationServer01">Telefono</label>
        <input type="text" class="form-control is-valid" id="telefono" name="telefono"
            placeholder="primer apelldo.." value="{{isset($empresa->telefono)?$empresa->telefono:old('telefono')}}">
        @error('telefono')
            <small style="color:red;">* {{$message}}</small>
        @enderror
        <div class="invalid-feedback">
            el campo es obligatorio!
        </div>
    </div>
    <br>
    <div class="col-md-4 mb-3">
        <label for="validationServer01">Titular</label>
        <input type="text" class="form-control is-valid" id="titular" name="titular"
            placeholder="primer apelldo.." value="{{isset($empresa->titular)?$empresa->titular:old('titular')}}">
        @error('titular')
            <small style="color:red;">* {{$message}}</small>
        @enderror
        <div class="invalid-feedback">
            el campo es obligatorio!
        </div>
    </div>
    <br>
    <div class="col-md-4 mb-3">
        <label for="validationServer05">Domicilio</label>
        <select name="domicilio_id" id="domicilio_id">
            <option selected disabled>-Seleccionar-</option>
            @foreach ( $domicilios as $d )
                <option value="{{$d->id}}"
                    {{(isset($empresa->domicilio_id) && $empresa->domicilio_id == $d->id)?'selected':''}}
                    >{{$d->calle}}</option>
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
                    {{(isset($empresa->user_id) && $empresa->user_id == $u->id)?'selected':''}}
                    >{{$u->name}}</option>
            @endforeach
        </select>
    </div>
    <br>
</div>

<input type="submit" value="{{$modo}}">
