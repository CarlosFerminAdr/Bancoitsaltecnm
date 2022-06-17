<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PDF</title>

    <link href="{{ public_path('https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css') }}" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
    <div style="text-align: center;">
        <img src="vendor/img/titulo2.jpg" alt="TecNM" width="800" height="100">
    </div>
    <br>
    <table id="proyectos" class="table table-striped table-bordered dt-responsive nowrap" style="background-color: white;">
        <thead class="thead" style="background-color: #1b396a">
            <tr style='color:white; text-align:center'>
                <th colspan="6">
                    BANCO DE PROGRAMAS PARA SERVICIO SOCIAL
                <br>
                    DOMICILIOS DE LAS EMPRESAS
                </th>
            </tr>
            <tr style='color:white; text-align:center'>
                <th scope="col">#</th>
                <th scope="col">DEPENDENCIA</th>
                <th scope="col">DIRECCIÓN</th>
                <th scope="col">C. P.</th>
                <th scope="col">MUNICIPIO</th>
                <th scope="col">ESTADO</th>
            </tr>
        </thead>
        <tbody>
            @foreach ( $domicilios as $d )
                <tr style='color:black; text-align:center'>
                    <th scope="row">{{ $d->id }}</th>
                    @if (isset($d->empresa->nombre))
                        <td>{{ $d->empresa->nombre }}</td>
                    @else
                        <td>EMPRESA No.{{$d->id}}</td>
                    @endif
                    <td>Calle. {{$d->calle}}, {{$d->numero}}, Col. {{$d->colonia}}</td>
                    <td>{{$d->cp}}</td>
                    <td>{{$d->municipio}}</td>
                    <td>{{$d->estado}}</td>
                </tr>
            @endforeach
        </tbody>

    </table>
</body>
</html>
