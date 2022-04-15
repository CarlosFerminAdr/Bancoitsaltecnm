<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
    <form action="{{route('proyectogramas.store')}}" method="POST" autocomplete="off">
        @csrf
        @include('proyectograma.form',['modo'=>'Guardar', 'titulo'=>'AGREGAR AL'])
    </form>
    <br>
</body>
</html>
