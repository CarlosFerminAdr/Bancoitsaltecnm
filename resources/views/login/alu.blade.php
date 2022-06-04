@extends('layouts.master')

@section('content')
<div class="navbar">
    {{--<ul class="navbar-nav ">
        @if (Route::has('register'))
                <a type="button" class="btn" href="{{ route('register') }}" style="color:white">{{ __('Registro') }}</a>
        @endif
    </ul>--}}
    <ul class="navbar-nav ms-auto">
        @if (Route::has('login'))
            <a type="button" class="btn btn-primary" href="/">{{ __('Acceder') }}</a>
        @endif
    </ul>
</div>

<div class="container custom-login">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow border">
                <div class="card-header text-center" style="background-color: #1F5F96;">
                    <strong style="color:white">{{ __('Iniciar Sesión Alumno') }}</strong>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}" autocomplete="off">
                        @csrf

                        <div class="container">
                            <div class="row justify-content-center">
                                <a href="/">
                                    <img src="vendor/img/itsal.png" alt="Logo" width="100" height="100" class="center">
                                </a>
                            </div>
                        </div>
                        <br>
                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">
                                <strong>{{ __('Numero de Control:') }}</strong>
                            </label>

                            <div class="col-md-6">
                                <input id="email" type="text" placeholder="" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="off" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <br>
                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">
                                <strong>{{ __('NIP:') }}</strong>
                            </label>

                            <div class="col-md-6">
                                <input id="password" type="password" placeholder="" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="off">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <br>
                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-10">
                                <button type="submit" class="btn btn-flat" style="color:white">
                                    {{ __('Aceptar') }}
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
