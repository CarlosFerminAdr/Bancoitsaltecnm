@extends('adminlte::page')

@section('title', 'Usuario')

@section('content_header')
    <h1>ASIGNAR ROL DE USUARIO</h1>
@stop

@section('content')
    @if (Session('mensaje') == 'Rol de usuario asignado correctamente!')
        <div class="alert alert-success alert-dismissible fade show" role="alert" style="color:white">
            <strong>{{Session('mensaje')}}</strong>
            <button type="button"class="close" data-dismiss="alert" aria-label="close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <form action="{{route('users.update',$user)}}" method="POST">
        @csrf
        @method('PUT')

            <div class="row">
                <div class="col-sm-4 mb-3">
                    <div class="card was-validated shadow border border-primary">
                        <div class="card-header text-left" style="background-color: #1F5F96;">
                            <label for="name">
                                <strong style="color:white">Usuario:</strong>
                            </label>
                        </div>

                        <div class="card-body">
                            <input type="text" class="form-control is-valid" id="name" name="name"
                                readonly placeholder="escriba el nombre de la Carrera.." value="{{isset($user->name)?$user->name:old('name')}}" required>
                            <div class="invalid-feedback">
                                <strong>*El campo Nombre es obligatorio.</strong>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 mb-3">
                    <div class="card was-validated shadow border border-primary">
                        <div class="card-header text-left" style="background-color: #1F5F96;">
                            <label for="email">
                                <strong style="color:white">Correo Electrónico:</strong>
                            </label>
                        </div>

                        <div class="card-body">
                            <input type="text" class="form-control is-valid" id="email" name="email"
                                readonly placeholder="escriba el Correo Electrónico.." value="{{isset($user->email)?$user->email:old('email')}}" required>
                            <div class="invalid-feedback">
                                <strong>*El campo Correo Electrónicoes obligatorio.</strong>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 mb-3">
                    <div class="card was-validated shadow border border-primary">
                        <div class="card-header text-left" style="background-color: #1F5F96;">
                            <label for="tipo_user">
                                <strong style="color:white">Tipo de Usuario:</strong>
                            </label>
                        </div>

                        <div class="card-body">
                            <input type="text" class="form-control is-valid" id="tipo_user" name="tipo_user"
                                readonly placeholder="escriba el tipo de Usuario.." value="{{isset($user->tipo_user)?$user->tipo_user:old('tipo_user')}}" required>
                            <div class="invalid-feedback">
                                <strong>*El campo tipo de Usuario obligatorio.</strong>
                            </div>
                        </div>
                    </div>
                </div>

            <div class="col-sm-12 mb-3">
                <div class="card was-validated shadow border border-primary">
                    <div class="card-header text-left" style="background-color: #1F5F96;">
                        <label for="name">
                            <strong style="color:white">Roles:</strong>
                        </label>
                    </div>
                    <div class="card-body">
                        @foreach ( $roles as $r )
                            <label class="mr-4">
                                <input type="radio" name="roles" value="{{$r->id}}"
                                {{(isset($r->id) && $r->id == $user->role_id)?'checked':''}}>{{$r->name}}
                            </label>
                        @endforeach
                        @error('roles')
                            <div style="color:red;">
                                <strong>* {{ $message }}</strong>
                            </div>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
        <input class="btn btn-success float-right mt-2" type="submit" value="Guardar">

        <a class="btn float-end mt-2" style="background-color: #1F5F96; color:white" href="{{route('users.index')}}">
            <i class="fas fa-reply"></i> Atras</a>
    </form>

@stop
