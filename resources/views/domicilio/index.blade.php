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

    <h1>DOMICILIOS</h1>

    <a href="{{route('domicilios.create')}}">Agregar</a><br><br>
    <table class="table table-hover">
        <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">DIRECCIÓN</th>
              <th scope="col">C. P.</th>
              <th scope="col">MUNICIPIO</th>
              <th scope="col">ESTADO</th>
            </tr>
        </thead>
        <tbody>
            @foreach ( $domicilios as $d )
            <tr>
                <th scope="row">{{$d->id}}</th>
                <td>Calle. {{$d->calle}}, {{$d->numero}}, Col. {{$d->colonia}}</td>
                <td>{{$d->cp}}</td>
                <td>{{$d->municipio}}</td>
                <td>{{$d->estado}}</td>
                <td><a href="{{route('domicilios.edit',$d)}}">Editar</a></td>
                <td>
                    <form action="{{route('domicilios.destroy',$d)}}" method="POST">
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
{{$domicilios->links()}}
