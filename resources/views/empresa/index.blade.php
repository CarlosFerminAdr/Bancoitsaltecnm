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

    <h1>EMPRESAS</h1>

    <a href="{{route('empresas.create')}}">Agregar</a><br><br>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">EMPRESA</th>
                <th scope="col">GIRO</th>
                <th scope="col">RFC</th>
                <th scope="col">CORREO</th>
                <th scope="col">TELFONO</th>
                <th scope="col">TITULAR</th>
                <th scope="col">DOMICILIO</th>
                <th scope="col">USUARIO</th>
            </tr>
        </thead>
        <tbody>
            @foreach ( $empresas as $e )
                <tr>
                    <th scope="row">{{$e->id}}</th>
                    <td>{{$e->nombre}}</td>
                    <td>{{$e->giro}}</td>
                    <td>{{$e->rfc}}</td>
                    <td>{{$e->correo}}</td>
                    <td>{{$e->telefono}}</td>
                    <td>{{$e->titular}}</td>
                    <td>{{$e->domicilio->calle}}</td>
                    <td>{{$e->user->name}}</td>
                    <td><a href="{{route('empresas.edit',$e)}}">Editar</a></td>
                    <td>
                        <form action="{{route('empresas.destroy',$e)}}" method="POST">
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
{{$empresas->links()}}
