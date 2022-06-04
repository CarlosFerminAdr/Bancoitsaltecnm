@extends('layouts.master')

@section('content')
<div class="navbar">
    <ul class="navbar-nav ms-auto">
        @if (Route::has('login'))
            <a type="button" class="btn btn-primary" href="/">{{ __('Acceder') }}</a>
        @endif
    </ul>
</div>

<div class="container custom-register">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow border">
                <div class="card-header text-center" style="background-color: #1F5F96;">
                    <strong style="color:white">{{ __('Registrarme') }}</strong>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" autocomplete="off">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-5 col-form-label text-md-end">
                                <strong>{{ __('Nombre:') }}</strong>
                            </label>

                            <div class="col-md-5">
                                <input id="name" type="text" placeholder="" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="off" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-5 col-form-label text-md-end">
                                <strong>{{ __('Correo Electrónico:') }}</strong>
                            </label>

                            <div class="col-md-5">
                                <input id="email" type="email" placeholder="" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="off">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-5 col-form-label text-md-end">
                                <strong>{{ __('Contraseña:') }}</strong>
                            </label>

                            <div class="col-md-5">
                                <input id="password" type="password" placeholder="" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="off">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-5 col-form-label text-md-end">
                                <strong>{{ __('Confirmar Contraseña:') }}</strong>
                            </label>

                            <div class="col-md-5">
                                <input id="password-confirm" type="password" placeholder="" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <input type="hidden" name="tipo_user" value="Empresa">

                        {{--<div class="row mb-3">
                            <label for="tipo_user" class="col-md-5 col-form-label text-md-end">
                                <strong>{{ __('Usuario:') }}</strong>
                            </label>
                            <div class="col-md-5">
                                <select name="tipo_user" id="tipo_user" class="form-control">
                                    <option selected disabled>-Seleccionar-</option>
                                    <option value="Alumno">Alumno</option>
                                    <option value="Empresa">Empresa</option>
                                </select>
                            </div>
                        </div>--}}

                        <div>
                            <input type="hidden" name="status" value="0">
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-10">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Enviar') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
