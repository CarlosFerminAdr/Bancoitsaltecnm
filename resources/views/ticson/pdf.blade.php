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
    <table id="proyectos" class="table table-hover table-bordered dt-responsive nowrap" style="background-color: white;">
        <thead class="thead" style="background-color: gray;">
            <tr style='color:black; text-align:center'>
                <th colspan="5">
                    BANCO DE PROYECTOS PARA RESIDENCIA PROFESIONAL DISPONIBLES
                <br>
                    @foreach ( $proyectos as $x ) {{ $x->carrera->nombre }} @endforeach
                </th>
            </tr>
            <tr style='color:black; text-align:center'>
                <th scope="col">#</th>
                <th scope="col">EMPRESA</th>
                <th scope="col">PROYECTO</th>
                <th scope="col">CARRERA</th>
                <th scope="col">No. ALUMNOS</th>
            </tr>
        </thead>
        <tbody>
            @foreach ( $proyectos as $x )
                <tr style='color:black; text-align:center'>
                    <th scope="row">{{ $x->id }}</th>
                    <td>{{$x->proyectograma->empresa->nombre}}</td>
                    <td>{{ $x->proyectograma->nombre }}</td>
                    <td>{{ $x->carrera->nombre }}</td>
                    <td>{{$x->proyectograma->nalumnos}}</td>
                </tr>
            @endforeach
        </tbody>

    </table>
</body>
</html>
