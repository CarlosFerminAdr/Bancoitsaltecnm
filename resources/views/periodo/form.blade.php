<div class="form-row">
    <h1 class="text-center"><strong>{{$modo}} PERIODO</strong></h1>

    <div class="col-md-4 mb-3">
        <label for="validationServer02">Periodo</label>
        <input type="text" class="form-control is-valid" id="nombre" name="nombre"
            placeholder="periodo.." value="{{isset($periodo->nombre)?$periodo->nombre:old('nombre')}}">
        @error('nombre')
            <small style="color:red;">* {{$message}}</small>
        @enderror
        <div class="invalid-feedback">
            el campo es obligatorio!
        </div>
    </div>
    <br>

</div>

<input type="submit" value="{{$modo}}">
