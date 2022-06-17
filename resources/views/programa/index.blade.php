@extends('adminlte::page')

@section('title', 'Programas')

@section('content_header')
    <h1>PROGRAMAS</h1>
@stop

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap4.min.css">
@stop

@section('content')

    @if (Session('mensaje') == 'Programa agregado corectamente!')
        <div class="alert alert-success alert-dismissible fade show" role="alert" style="color:black">
            <strong>{{Session('mensaje')}}</strong>
            <button type="button"class="close" data-dismiss="alert" aria-label="close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    @if (Session('mensaje') == 'Programa actualizado corectamente!')
        <div class="alert alert-warning alert-dismissible fade show" role="alert" style="color:black">
            <strong>{{Session('mensaje')}}</strong>
            <button type="button"class="close" data-dismiss="alert" aria-label="close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    @if (Session('mensaje') == 'Programa eliminado corectamente!')
        <div class="alert alert-danger alert-dismissible fade show" role="alert" style="color:black">
            <strong>{{Session('mensaje')}}</strong>
            <button type="button"class="close" data-dismiss="alert" aria-label="close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <br>
    <div class="card table-responsive">
        <div class="card-body">
            <table id="proyectos" class="table table-hover table-bordered dt-responsive nowrap table-primary" style="background-color: white;">
                <thead class="thead" style="background-color: #1F5F96;">
                    <tr style='color:white; text-align:center'>
                        <th scope="col">#</th>
                        <th scope="col">PROGRAMA</th>
                        <th scope="col">PERIODO</th>
                        <th scope="col">FECHA</th>
                        <th scope="col">ESTATUS</th>
                        @can('programas.edit')
                            <th scope="col">EDITAR</th>
                        @endcan
                        @can('programas.destroy')
                            <th scope="col">ELIMINAR</th>
                        @endcan
                    </tr>
                </thead>
                <tbody>
                    @foreach ( $programas as $y )
                        <tr style='color:black; text-align:center'>
                            <th scope="row">{{ ++$i }}</th>
                            <td>{{ $y->proyectograma->nombre }}</td>
                            <td>{{ $y->periodo->nombre }}</td>
                            <td>{{ utf8_encode(strftime("%d %B %Y", strtotime($y->proyectograma->flimite))) }}</td>
                            <td id="resp{{ $y->id }}">
                                @if($y->status == 1)
                                <button type="button" class="btn btn-warning col-sm-12">En Proceso</button>
                                    @elseif ($y->status == 2)
                                <button type="button" class="btn btn-danger col-sm-12">Asignado</button>
                                    @elseif ($y->status == 3)
                                <button type="button" class="btn btn-success col-sm-12">Disponible</button>
                                @endif
                            </td>
                            @can('programas.edit')
                                <td>
                                    <a class="btn btn-warning" href="{{route('programas.edit',$y)}}">
                                        <i class="fas fa-highlighter"></i></a>
                                </td>
                            @endcan
                            @can('programas.destroy')
                                <td>
                                    <form action="{{route('programas.destroy',$y)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger" type="submit" onclick="return confirm('¿Desea eliminar el registro?');">
                                            <i class="far fa-trash-alt"></i>
                                        </button>
                                    </form>
                                </td>
                            @endcan
                        </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
    </div>

@stop

@section('js')
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
