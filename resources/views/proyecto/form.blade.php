<div class="form-row">
    <h1 class="text-center"><strong>{{$modo}} PROYECTO</strong></h1>

    <div class="col-md-4 mb-3">
        <label for="objetivo">Objetivo</label>
        <div class="form-group">
            <textarea name="objetivo" rows="5" cols="100"
            class="form-control">{{isset($proyecto->objetivo)?$proyecto->objetivo:old('objetivo')}}</textarea>
            @error('objetivo')
                <small style="color:red;">* {{$message}}</small>
            @enderror
            <div class="invalid-feedback">
                el campo es obligatorio!
            </div>
        </div>
    </div>
    <br>
    <div class="col-md-4 mb-3">
        <label for="problematica">Problematica</label>
        <div class="form-group">
            <textarea name="problematica" rows="9" cols="100"
            class="form-control">{{isset($proyecto->problematica)?$proyecto->problematica:old('problematica')}}</textarea>
            @error('problematica')
                <small style="color:red;">* {{$message}}</small>
            @enderror
            <div class="invalid-feedback">
                el campo es obligatorio!
            </div>
        </div>
    </div>
    <br>
</div>

<input type="submit" value="{{$modo}}">
