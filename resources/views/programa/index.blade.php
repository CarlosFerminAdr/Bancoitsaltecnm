<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @if (Session::has('mensaje'))
        <strong>{{Session::get('mensaje')}}</strong>
    @endif

    <h1>PROGRAMAS</h1>

    <a href="{{route('programas.create')}}">Agregar</a><br><br>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">PROGRAMA</th>
                <th scope="col">ACTIVIDADES</th>
            </tr>
        </thead>
        <tbody>
            @foreach ( $programas as $y )
                <tr>
                    <th scope="row">{{$y->id}}</th>
                    <td>{{$y->tipo_programa}}</td>
                    <td>{{$y->actividades}}</td>
                    <td><a href="{{route('programas.edit',$y)}}">Editar</a></td>
                    <td>
                        <form action="{{route('programas.destroy',$y)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('¿Desea eliminar el registro?');">
                                Eliminar
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
{{$programas->links()}}
