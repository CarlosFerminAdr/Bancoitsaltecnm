<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
    <form method="POST" action="{{ route('tipos.store') }}"  role="form" autocomplete="off" enctype="multipart/form-data">
        @csrf
        @include('tipo.form',['modo'=>'AGREGAR UN NUEVO', 'modo2'=>'Guardar'])
    </form>
    <br>
</body>
</html>
