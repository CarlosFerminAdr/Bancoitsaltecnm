@extends('adminlte::page')

@section('title', 'Domicilios')

@section('content_header')
    <h1>DOMICILIOS</h1>
@stop

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap4.min.css">
@stop

@section('content')
    @if (Session('mensaje') == 'Domicilio agregado corectamente!')
        <div class="alert alert-success alert-dismissible fade show" role="alert" style="color:black">
            <strong>{{Session('mensaje')}}</strong>
            <button type="button"class="close" data-dismiss="alert" aria-label="close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    @if (Session('mensaje') == 'Domicilio actualizado corectamente!')
        <div class="alert alert-warning alert-dismissible fade show" role="alert" style="color:black">
            <strong>{{Session('mensaje')}}</strong>
            <button type="button"class="close" data-dismiss="alert" aria-label="close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    @if (Session('mensaje') == 'Domicilio eliminado corectamente!')
        <div class="alert alert-danger alert-dismissible fade show" role="alert" style="color:black">
            <strong>{{Session('mensaje')}}</strong>
            <button type="button"class="close" data-dismiss="alert" aria-label="close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <br>
    <div class="card table-responsive">
        <div class="card-header">
            <strong>GENERAR PDF:</strong>
            <a class="btn btn-danger float-right" href="{{route('allDomicilios.pdf')}}"><i class="fas fa-file-pdf"></i>{{ __(' Imprimir') }}</a>
        </div>
        <div class="card-body">
            <table id="proyectos" class="table table-hover table-bordered dt-responsive nowrap table-primary" style="background-color: white;">
                <thead class="thead" style="background-color: #1F5F96;">
                    <tr style='color:white; text-align:center'>
                        <th scope="col">#</th>
                        <th scope="col">EMPRESA</th>
                        <th scope="col">DIRECCIÓN</th>
                        <th scope="col">C. P.</th>
                        <th scope="col">MUNICIPIO</th>
                        <th scope="col">ESTADO</th>
                        @can('allDomicilios.edit')
                            <th scope="col">Editar</th>
                        @endcan
                        @can('allDomicilios.destroy')
                            <th scope="col">Eliminar</th>
                        @endcan
                    </tr>
                </thead>
                <tbody>
                    @foreach ( $domicilios as $d )
                        <tr style='color:black; text-align:center'>
                            <th scope="row">{{ ++$i }}</th>
                            @if (isset($d->empresa->nombre))
                                <td>{{ $d->empresa->nombre }}</td>
                            @else
                                <td>EMPRESA No.{{$d->id}}</td>
                            @endif
                            <td>Calle. {{$d->calle}}, {{$d->numero}}, Col. {{$d->colonia}}</td>
                            <td>{{$d->cp}}</td>
                            <td>{{$d->municipio}}</td>
                            <td>{{$d->estado}}</td>
                            @can('allDomicilios.edit')
                                <td>
                                    <a class="btn btn-warning" href="{{route('allDomicilios.edit',$d)}}">
                                        <i class="fas fa-highlighter"></i></a>
                                </td>
                            @endcan
                            @can('allDomicilios.destroy')
                                <td>
                                    <form action="{{route('allDomicilios.destroy',$d)}}" method="POST">
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
