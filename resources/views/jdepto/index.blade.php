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

    <h1>JEFES DE DEPARTAMENTO</h1>

    <a href="{{route('jdeptos.create')}}">Agregar</a><br><br>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">NOMBRE</th>
                <th scope="col">DEPARTAMENTO</th>
                <th scope="col">USUARIO</th>
            </tr>
        </thead>
        <tbody>
            @foreach ( $jdeptos as $d )
                <tr>
                    <th scope="row">{{$d->id}}</th>
                    <td>{{$d->nombre}} {{$d->apaterno}} {{$d->amaterno}}</td>
                    <td>{{$d->departamento}}</td>
                    <td>{{$d->user->name}}</td>
                    <td><a href="{{route('jdeptos.edit',$d)}}">Editar</a></td>
                    <td>
                        <form action="{{route('jdeptos.destroy',$d)}}" method="POST">
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
{{$jdeptos->links()}}
