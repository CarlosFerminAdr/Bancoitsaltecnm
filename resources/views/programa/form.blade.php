<div class="form-row">
    <h1 class="text-center"><strong>{{$modo}} PROGRAMA</strong></h1>

    <div class="col-md-4 mb-3">
        <label for="actividades">Actividades</label>
        <div class="form-group">
            <textarea name="actividades" rows="9" cols="100"
            class="form-control">{{isset($programa->actividades)?$programa->actividades:old('actividades')}}</textarea>
            @error('actividades')
                <small style="color:red;">* {{$message}}</small>
            @enderror
            <div class="invalid-feedback">
                el campo es obligatorio!
            </div>
        </div>
    </div>
    <br>
    <div class="col-md-4 mb-3">
        <label for="validationServer05">Tipo de Programa</label>
        <select name="tipo_id" id="tipo_id">
            <option selected disabled>-Seleccionar-</option>
            @foreach ( $tipos as $t )
                <option value="{{$t->id}}"
                    {{(isset($programa->tipo_id) && $programa->tipo_id == $t->id)?'selected':''}}
                    >{{$t->tipo_programa}}</option>
            @endforeach
        </select>
    </div>
    <br>
</div>

<input type="submit" value="{{$modo}}">
