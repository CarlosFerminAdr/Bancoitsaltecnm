<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('alumnos.update',$alumno)}}" method="POST">
        @csrf
        @method('PUT')
        @include('alumno.form',['modo'=>'EDITAR'])
    </form>
    <br>
    <a href="{{route('alumnos.index')}}">Atras</a>
</body>
</html>
