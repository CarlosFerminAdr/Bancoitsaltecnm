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
                <th colspan="5">
                    BANCO DE PROGRAMAS PARA SERVICIO SOCIAL
                <br>
                    PROGRAMAS ASIGNADOS
                </th>
            </tr>
            <tr style='color:white; text-align:center'>
                <th scope="col">#</th>
                <th scope="col">EMPRESA</th>
                <th scope="col">PROGRAMA</th>
                <th scope="col">CARRERA</th>
                <th scope="col">No. ALUMNOS</th>
            </tr>
        </thead>
        <tbody>
            @foreach ( $programas as $y )
                <tr style='color:black; text-align:center'>
                    <th scope="row">{{ $y->id }}</th>
                    <td>{{ $y->proyectograma->empresa->nombre }}</td>
                    <td>{{ $y->proyectograma->nombre }}</td>
                    <td>{{ $y->carrera->nombre }}</td>
                    <td>{{ $y->proyectograma->nalumnos }}</td>
                </tr>
            @endforeach
        </tbody>

    </table>
</body>
</html>
