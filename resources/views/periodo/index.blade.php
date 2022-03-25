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

    <h1>PERIODOS</h1>

    <a href="{{route('periodos.create')}}">Agregar</a><br><br>
    <table class="table table-hover">
        <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">NOMBRE</th>
            </tr>
        </thead>
        <tbody>
            @foreach ( $periodos as $p )
                <tr>
                    <th scope="row">{{$p->id}}</th>
                    <td>{{$p->nombre}}</td>
                    <td><a href="{{route('periodos.edit',$p)}}">Editar</a></td>
                    <td>
                        <form action="{{route('periodos.destroy',$p)}}" method="POST">
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
{{$periodos->links()}}
