<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('proyectogramas.update',$proyectograma)}}" method="POST">
        @csrf
        @method('PUT')
        @include('proyectograma.form',['modo'=>'EDITAR', 'titulo'=>'ACTUALIZAR EL'])
    </form>
    <br>
    <a href="{{route('proyectogramas.index')}}">Atras</a>
</body>
</html>
