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

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body>
        {{ View::make('header') }}
        @yield('content')
        {{ View::make('footer') }}
    </body>
    <style>
        .custom-login {
            height: 509px;
            padding: 50px;
        }

        .custom-register {
            height: 509px;
            padding: 50px;
        }

        section {
            padding: 5px ;
        }

        #header {
            background: #1c5b92 !important;
        }

        #footer {
            background: #1b396a !important;
        }

        .btn {
            background: #1F5F96 !important;
        }

        .form-control::placeholder{
            font-family: "Font Awesome 6 Free";
            font-weight: 900;
        }

        .center {
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 20%;
        }
    </style>
</html>
