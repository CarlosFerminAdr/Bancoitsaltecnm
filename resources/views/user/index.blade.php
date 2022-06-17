@extends('adminlte::page')

@section('title', 'Usuarios')

@section('content_header')
    <h1>USUARIOS</h1>
@stop

@section('css')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap4.min.css">

    <style>
        .form-check-input{
            width: 200px;
            background-color:#FF0000;
            color:#fff;
            margin: auto;
        }
    </style>
@stop

@section('content')
    @if (Session('mensaje') == 'Rol de usuario asignado correctamente!')
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
                <thead class="thead" style="background-color: #1F5F96;">
                    <tr style='color:white; text-align:center'>
                        <th scope="col">#</th>
                        <th scope="col">NOMBRE</th>
                        <th scope="col">CORREO ELECTRÓNICO</th>
                        <th scope="col">USUARIO</th>
                        <th scope="col">ACTIVO</th>
                        <th scope="col">ACCESO</th>
                        <th scope="col">ROL</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ( $users as $u )
                        <tr style='color:black; text-align:center'>
                            <th scope="row">{{ ++$i }}</th>
                            <td>{{ $u->name }}</td>
                            <td>{{ $u->email }}</td>
                            <td>{{ $u->tipo_user }}</td>
                            <td>{{ $u->created_at->diffForHumans() }}</td>
                            <td id="resp{{ $u->id }}">
                                  @if($u->status == 1)
                                  <button type="button" class="btn btn-success col-sm-6">SI</button>
                                      @else
                                  <button type="button" class="btn btn-danger col-sm-6">NO</button>
                                  @endif
                            </td>
                            <td>
                                <a class="btn" style="background-color: #1F5F96; color:white" href="{{route('users.edit',$u)}}">
                                    <i class="far fa-star"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
    </div>
@stop

@section('js')
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
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
        <script>
            $('.form-check-input').change(function(){
                var status = $(this).prop('checked') == true ? 1 : 0;
                var id = $(this).data('id');
                console.log(status);
            })
        </script>
@stop
