<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
    <form method="POST" action="{{ route('tipos.update', $tipo->id) }}" role="form" autocomplete="off" enctype="multipart/form-data">
        {{ method_field('PATCH') }}
        @csrf
        @include('tipo.form',['modo'=>'EDITAR EL', 'modo2'=>'Editar'])
    </form>
    <br>
</body>
</html>
