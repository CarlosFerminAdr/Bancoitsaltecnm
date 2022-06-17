@extends('adminlte::page')

@section('title', 'Alumnos')

@section('content_header')
    <h1>ALUMNOS</h1>
@stop

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap4.min.css">
@stop

@section('content')
    @if (Session('mensaje') == 'Alumno agregado corectamente!')
        <div class="alert alert-success alert-dismissible fade show" role="alert" style="color:black">
            <strong>{{Session('mensaje')}}</strong>
            <button type="button"class="close" data-dismiss="alert" aria-label="close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    @if (Session('mensaje') == 'Alumno actualizado corectamente!')
        <div class="alert alert-warning alert-dismissible fade show" role="alert" style="color:black">
            <strong>{{Session('mensaje')}}</strong>
            <button type="button"class="close" data-dismiss="alert" aria-label="close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    @if (Session('mensaje') == 'Alumno eliminado corectamente!')
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
                        <th scope="col">Nombre</th>
                        <th scope="col">Correo</th>
                        <th scope="col">Carrera</th>
                        @can('alumnos.edit')
                            <th scope="col">Editar</th>
                        @endcan
                        @can('alumnos.destroy')
                            <th scope="col">Eliminar</th>
                        @endcan
                    </tr>
                </thead>
                <tbody>
                    @foreach ( $alumnos as $a )
                        <tr style='color:black; text-align:center'>
                            <th scope="row">{{ ++$i }}</td>
                            <td>{{$a->nombre}} {{$a->apaterno}} {{$a->amaterno}}</td>
                            <td>{{$a->correo}}</td>
                            <td>{{$a->carrera->nombre}}</td>
                            @can('alumnos.edit')
                                <td>
                                    <a class="btn btn-warning" href="{{route('alumnos.edit',$a)}}">
                                        <i class="fas fa-highlighter"></i></a>
                                </td>
                            @endcan
                            @can('alumnos.destroy')
                                <td>
                                    <form action="{{route('alumnos.destroy',$a)}}" method="POST">
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
