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

    <h1>CARRERAS</h1>

    <a href="{{route('carreras.create')}}">Agregar</a><br><br>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">CARRERA</th>
                <th scope="col">JEFE DE DEPARTAMENTO</th>
            </tr>
        </thead>
        <tbody>
            @foreach ( $carreras as $c )
                <tr>
                    <th scope="row">{{$c->id}}</th>
                    <td>{{$c->nombre}}</td>
                    <td>{{$c->jdepto->nombre}} {{$c->jdepto->apaterno}} {{$c->jdepto->amaterno}}</td>
                    <td><a href="{{route('carreras.edit',$c)}}">Editar</a></td>
                    <td>
                        <form action="{{route('carreras.destroy',$c)}}" method="POST">
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
{{$carreras->links()}}
