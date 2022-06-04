@extends('adminlte::page')

@section('title', 'Proyectos')

@section('content_header')
    <h1>SOLICITUD DE ALUMNOS</h1>
@stop

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-toggle/2.2.2/css/bootstrap-toggle.css" integrity="sha512-9tISBnhZjiw7MV4a1gbemtB9tmPcoJ7ahj8QWIc0daBCdvlKjEA48oLlo6zALYm3037tPYYulT0YQyJIJJoyMQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
                        <th scope="col">No. Control</th>
                        <th scope="col">Alumno</th>
                        <th scope="col">Proyecto</th>
                        <th scope="col">Asignado</th>
                        {{--@can('registroSolicitud.edit')--}}
                            <th scope="col">Autorizar</th>
                        {{--@endcan--}}
                        {{--@can('tics.destroy')
                            <th scope="col">Eliminar</th>
                        @endcan--}}
                    </tr>
                </thead>
                <tbody>
                    @foreach ( $registros as $r )
                        <tr style='color:black; text-align:center'>
                            <th scope="row">{{ ++$i }}</th>
                            <td>{{ $r->alumno->ncontrol }}</td>
                            <td>{{ $r->alumno->nombre }} {{ $r->alumno->apaterno }} {{ $r->alumno->amaterno }}</td>
                            <td>{{ $r->proyecto->proyectograma->nombre }}</td>
                            {<td id="resp{{ $r->id }}">
                                @if($r->status == 1)
                                    <button type="button" class="btn btn-success col-sm-12">SI</button>
                                @else
                                    <button type="button" class="btn btn-danger col-sm-12">NO</button>
                                @endif
                            </td>
                            {{--}@can('registroSolicitud.edit')--}}
                                <td>
                                    <form action="{{route('solicitudProyecto.destroy',$r)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger" type="submit" onclick="return confirm('¿Desea Autorizar el registro?');">
                                            Autorizar <i class="fas fa-thumbs-up"></i>
                                        </button>
                                    </form>
                                    {{--<a class="btn" style="background-color: #1F5F96; color:white" href="{{route('registroSolicitud.edit',$r)}}">
                                        <i class="fas fa-share"></i></a>--}}
                                    {{--<label>
                                        <input data-id="{{ $r->id }}" class="toggle-class" type="checkbox"
                                        data-onstyle="success"
                                        data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive"
                                        {{ $r->status ? 'checked' : '' }}>
                                        <span class="slider round"></span>
                                    </label>--}}
                                </td>
                            {{--@endcan--}}
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js" integrity="sha512-F636MAkMAhtTplahL9F6KmTfxTmYcAcjcCkyu0f0voT3N/6vzAuJ4Num55a0gEJ+hRLHhdz3vDvZpf6kqgEa5w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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

    <script>
        /*$(function(){
            $('.toggle-class').change(function(){
                var status = $(this).prop('checked') = true ? 1 : 0;
                alert(status);
                var id = $(this).data('id');
                alert(id);
                console.log(status);
            });
            $.ajax({
                type: "GET",
                dataType: "json",
                url: '/registroSolicitud',
                data: {'status': status, 'id': id},
                success: function(data){
                    $('#resp' + id).html(data.var);
                    console.log(data.var)

                }
            });
        });*/
    </script>

    <script>
        /*$('.toggle-class').on('change', function(){
            var status = $(this).prop('checked') == true ? 1 : 0;
            alert(status);
            var id = $(this).data('id');
            alert(id);
            $.ajax({
                type: 'GET',
                dataType: 'JSON',
                url: '{{ route('changeStatus') }}',
                data: {
                    'status': status,
                    'id', id
                },
                success: function(data){

                }
            });
        });*/
    </script>
@stop
