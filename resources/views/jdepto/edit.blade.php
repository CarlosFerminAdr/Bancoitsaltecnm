<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('jdeptos.update',$jdepto)}}" method="POST">
        @csrf
        @method('PUT')
        @include('jdepto.form',['modo'=>'EDITAR'])
    </form>
    <br>
    <a href="{{route('jdeptos.index')}}">Atras</a>
</body>
</html>
