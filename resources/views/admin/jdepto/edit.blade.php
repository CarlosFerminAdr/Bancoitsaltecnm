<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
    <form action="{{route('jdeptos.update',$jdepto)}}" method="POST" autocomplete="off">
        @csrf
        @method('PUT')
        @include('jdepto.form',['modo'=>'EDITAR', 'modo2'=>'Editar'])
    </form>
    <br>
</body>
</html>
