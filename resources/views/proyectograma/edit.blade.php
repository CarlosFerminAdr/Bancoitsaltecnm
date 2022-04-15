<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
    <form action="{{route('proyectogramas.update',$proyectograma)}}" method="POST" autocomplete="off">
        @csrf
        @method('PUT')
        @include('proyectograma.form',['modo'=>'EDITAR', 'titulo'=>'ACTUALIZAR EL'])
    </form>
    <br>
</body>
</html>
