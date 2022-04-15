<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
    <form action="{{route('domicilios.store')}}" method="POST" autocomplete="off">
        @csrf
        @include('domicilio.form',['modo'=>'AGREGAR', 'modo2'=>'Guardar'])
    </form>
    <br>
</body>
</html>
