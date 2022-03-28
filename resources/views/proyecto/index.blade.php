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

    <h1>PROYECTOS</h1>

    <a href="{{route('proyectos.create')}}">Agregar</a><br><br>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Objetivo</th>
                <th scope="col">Problematica</th>
            </tr>
        </thead>
        <tbody>
            @foreach ( $proyectos as $x )
                <tr>
                    <th scope="row">{{$x->id}}</th>
                    <td>{{$x->objetivo}}</td>
                    <td>{{$x->problematica}}</td>
                    <td><a href="{{route('proyectos.edit',$x)}}">Editar</a></td>
                    <td>
                        <form action="{{route('proyectos.destroy',$x)}}" method="POST">
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
{{$proyectos->links()}}
