<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('proyectos.store')}}" method="POST">
        @csrf
        @include('proyecto.form',['modo'=>'AGREGAR'])
    </form>
    <br>
    <a href="{{route('proyectos.index')}}">Atras</a>
</body>
</html>
