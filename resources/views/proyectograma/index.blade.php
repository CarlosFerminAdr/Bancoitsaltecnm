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

    <h1>BANCO DE PROYECTOS Y PROGRAMAS</h1>

    <a href="{{route('proyectogramas.create')}}">Agregar</a><br><br>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Proyecto</th>
                <th scope="col">No. Alumnos</th>
                <th scope="col">Fecha Limite</th>
                <th scope="col">Estatus</th>
                <th scope="col">Empresa</th>
            </tr>
        </thead>
        <tbody>
            @foreach ( $proyectogramas as $b )
                <tr>
                    <th scope="row">{{$b->id}}</th>
                    <td>{{$b->nombre}}</td>
                    <td>{{$b->nalumnos}}</td>
                    <td>{{$b->flimite}}</td>
                    <td>{{$b->statu->estado}}</td>
                    <td>{{$b->empresa->nombre}}</td>
                    <td><a href="{{route('proyectogramas.edit',$b)}}">Editar</a></td>
                    <td>
                        <form action="{{route('proyectogramas.destroy',$b)}}" method="POST">
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
{{$proyectogramas->links()}}
