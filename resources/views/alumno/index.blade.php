<!DOCTYPE html>
<html lang="en">
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

    <h1>ALUMNOS</h1>

    <a href="{{route('alumnos.create')}}">Agregar</a><br><br>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th>Nombre</th>
                <th>No. Control</th>
                <th>NIP</th>
                <th>Correo</th>
                <th>Telefono</th>
                <th>Carrera</th>
                <th>Usuario</th>
            </tr>
        </thead>
        <tbody>
            @foreach ( $alumnos as $a )
                <tr>
                    <th scope="row">{{$a->id}}</th>
                    <th>{{$a->nombre}} {{$a->apaterno}} {{$a->amaterno}}</th>
                    <th>{{$a->ncontrol}}</th>
                    <th>{{$a->nip}}</th>
                    <th>{{$a->correo}}</th>
                    <th>{{$a->telefono}}</th>
                    <th>{{$a->carrera->nombre}}</th>
                    <th>{{$a->user->name}}</th>
                    <td><a href="{{route('alumnos.edit',$a)}}">Editar</a></td>
                    <td>
                        <form action="{{route('alumnos.destroy',$a)}}" method="POST">
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
{{$alumnos->links()}}
