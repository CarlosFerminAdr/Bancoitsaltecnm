<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ITSAL | BANCO DE PROYECTOS</title>
    <link rel="shortcut icon" href="vendor/img/LOGO-ITSAL.png" type="image/x-icon">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark shadow-sm" style="background-color: #1F5F96;">
        <a href="#">
            <img style="border-radius: 1000px;" src="vendor/img/logoTecNM.png" alt="Logo" width="40" height="40" class="center">
        </a>
        <p style="color: #1F5F96">{{__('..')}}</p>
        <a class="navbar-brand" href="#">
            <strong> TecNM-</strong>{{ __('ITSAL') }}
        </a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Opciones de lado Izquierdo -->
            <ul class="navbar-nav me-auto">

            </ul>

            <!-- Opciones de lado Derecho -->
            <ul class="navbar-nav ms-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item dropdown">
                        @if (isset($sql1))
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" style="color:white" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                @foreach ( $sql1 as $a )
                                    {{$a->nombre}} {{$a->apaterno}} {{$a->amaterno}}
                                @endforeach
                            </a>
                        @else
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" style="color:white" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{__('Salir')}}
                        </a>
                        @endif


                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();" style="color:red">
                            <i class="fas fa-power-off"></i><strong>{{ __(' Cerrar Sesión') }}</strong>
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @else
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Acceso') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Registro') }}</a>
                        </li>
                    @endif
                @endguest
            </ul>
        </div>
    </nav>
    @yield('content')
    @yield('Scripts')
</body>
<style>
    section {
        height: 40px;
        padding: 5px;
    }

    #titulo {
        background: #1F5F96 !important;
    }

    .itsal a {
        text-decoration: none;
    }

    .container_card {
        max-width: 1300px;
        padding: 3px;
        margin: auto;
        margin-top: 3px;
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
    }

    .card {
        width: 350px;
        position: relative;
        margin: 20px;
    }
</style>
</html>
