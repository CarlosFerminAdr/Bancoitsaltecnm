<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
    <form method="POST" action="{{ route('estados.update', $estado->id) }}" role="form" autocomplete="off" enctype="multipart/form-data">
        {{ method_field('PATCH') }}
        @csrf
        @include('estado.form',['modo'=>'EDITAR', 'modo2'=>'Editar'])
    </form>
    <br>
</body>
</html>
