@extends('adminlte::page')

@section('title', 'Proyectos')

@section('content_header')
    <h1>PROYECTOS EN PROCESO</h1>
@stop

@section('css')
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap4.min.css">
@stop

@section('content')

    @if (Session('mensaje') == 'Proyecto Autorizado Correctamente!')
        <div class="alert alert-success alert-dismissible fade show" role="alert" style="color:black">
            <strong>{{Session('mensaje')}}</strong>
            <button type="button"class="close" data-dismiss="alert" aria-label="close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    <br>
    <div class="card table-responsive">
        <div class="card-body">
            <table id="proyectos" class="table table-hover table-bordered dt-responsive nowrap" style="background-color: white;">
                <thead class="thead" style="background-color: #1F5F96;">{{--DodgerBlue;--}}
                    <tr style='color:white; text-align:center'>
                        <th scope="col">#</th>
                        <th scope="col">Empresa</th>
                        <th scope="col">Proyecto</th>
                        <th scope="col">Carrera</th>
                        <th scope="col">Estatus</th>
                        @can('quimicaoff.edit')
                            <th scope="col">Autorizar</th>
                        @endcan
                        {{--@can('tics.destroy')
                            <th scope="col">Eliminar</th>
                        @endcan--}}
                    </tr>
                </thead>
                <tbody>
                    @foreach ( $proyectos as $x )
                        <tr style='color:black; text-align:center'>
                            <th scope="row">{{ ++$i }}</th>
                            <td>{{$x->proyectograma->empresa->nombre}}</td>
                            <td>{{ $x->proyectograma->nombre }}</td>
                            <td>{{ $x->carrera->nombre }}</td>
                            <td id="resp{{ $x->id }}">
                                @if($x->status == 1)
                                <button type="button" class="btn btn-warning col-sm-12">En Proceso</button>
                                    @elseif ($x->status == 2)
                                <button type="button" class="btn btn-danger col-sm-12">Asignado</button>
                                    @elseif ($x->status == 3)
                                <button type="button" class="btn btn-success col-sm-12">Disponible</button>
                                @endif
                            </td>
                            @can('quimicaoff.edit')
                                <td>
                                    <a class="btn" style="background-color: #1F5F96; color:white" href="{{route('quimicaoff.edit',$x)}}">
                                        <i class="fas fa-share"></i></a>
                                </td>
                            @endcan
                            {{--@can('tics.destroy')
                                <td>
                                    <form action="{{route('proyectos.destroy',$x)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger" type="submit" onclick="return confirm('¿Desea eliminar el registro?');">
                                            <i class="far fa-trash-alt"></i>
                                        </button>
                                    </form>
                                </td>
                            @endcan--}}

                        </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
    </div>

@stop

@section('js')
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap4.min.js"></script>
    <script>
        $('#proyectos').DataTable({
            responsive:true,
            autoWidth: false,
            "language": {
                "lengthMenu": "Mostrar " +
                `<select>
                    <option value='5'>5</option>
                    <option value='10'>10</option>
                    <option value='50'>50</option>
                    <option value='100'>100</option>
                    <option value='-1'>Todo</option>
                </select>` + " Registros",
                "zeroRecords": "No se encontraron resultados de la Busqueda!",
                "info": "Página _PAGE_ de _PAGES_",
                "infoEmpty": "No hay registros disponibles",
                "infoFiltered": "(Se han encontrado _MAX_ registros)",
                "search": "Buscar:",
                "paginate": {
                    "previous": "<<",
                    "next": ">>"
                }
            }
        });
    </script>
@stop
