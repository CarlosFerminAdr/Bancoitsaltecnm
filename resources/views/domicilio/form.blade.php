<div class="form-row">
    <h1 class="text-center"><strong>{{$modo}} DOMICILIO</strong></h1>

    <div class="col-md-4 mb-3">
        <label for="validationServer02">Calle</label>
        <input type="text" class="form-control is-valid" id="calle" name="calle"
            placeholder="calle.." value="{{isset($domicilio->calle)?$domicilio->calle:old('calle')}}">
        @error('calle')
            <small style="color:red;">* {{$message}}</small>
        @enderror
        <div class="invalid-feedback">
            el campo es obligatorio!
        </div>
    </div>
    <br>

    <div class="col-md-4 mb-3">
        <label for="validationServer02">Numero</label>
        <input type="text" class="form-control is-valid" id="numero" name="numero"
            placeholder="s/n.." value="{{isset($domicilio->numero)?$domicilio->numero:old('numero')}}">
        @error('numero')
            <small style="color:red;">* {{$message}}</small>
        @enderror
        <div class="invalid-feedback">
            el campo es obligatorio!
        </div>
    </div>
    <br>

    <div class="col-md-4 mb-3">
        <label for="validationServer02">Colonia</label>
        <input type="text" class="form-control is-valid" id="colonia" name="colonia"
            placeholder="colonia.." value="{{isset($domicilio->colonia)?$domicilio->colonia:old('colonia')}}">
        @error('colonia')
            <small style="color:red;">* {{$message}}</small>
        @enderror
        <div class="invalid-feedback">
            el campo es obligatorio!
        </div>
    </div>
    <br>

    <div class="col-md-4 mb-3">
        <label for="validationServer02">Codigo Postal</label>
        <input type="text" class="form-control is-valid" id="cp" name="cp"
            placeholder="cp.." value="{{isset($domicilio->cp)?$domicilio->cp:old('cp')}}">
        @error('cp')
            <small style="color:red;">* {{$message}}</small>
        @enderror
        <div class="invalid-feedback">
            el campo es obligatorio!
        </div>
    </div>
    <br>

    <div class="col-md-4 mb-3">
        <label for="validationServer02">Municipio</label>
        <input type="text" class="form-control is-valid" id="municipio" name="municipio"
            placeholder="municipio.." value="{{isset($domicilio->municipio)?$domicilio->municipio:old('municipio')}}">
        @error('municipio')
            <small style="color:red;">* {{$message}}</small>
        @enderror
        <div class="invalid-feedback">
            el campo es obligatorio!
        </div>
    </div>
    <br>

    <div class="col-md-4 mb-3">
        <label for="validationServer02">Estado</label>
        <input type="text" class="form-control is-valid" id="estado" name="estado"
            placeholder="estado.." value="{{isset($domicilio->estado)?$domicilio->estado:old('estado')}}">
        @error('estado')
            <small style="color:red;">* {{$message}}</small>
        @enderror
        <div class="invalid-feedback">
            el campo es obligatorio!
        </div>
    </div>
    <br>


</div>

<input type="submit" value="{{$modo}}">
