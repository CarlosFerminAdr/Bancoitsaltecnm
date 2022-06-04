@extends('layouts.alumno')

@section('content')
    <div class="container">
        <br>
        <section id="titulo">
            <div class="text-center text-white">
                <h3>SISTEMA DE GESTIÓN DE BANCO DE PROYECTOS</h3>
            </div>
        </section>
        <div class="itsal">
            <form action="{{ route('prog') }}" method="POST" autocomplete="off">
                @csrf
                @foreach ( $sql1 as $a )
                    <input type="hidden" name="ncontrol" value="{{$a->ncontrol}}">
                @endforeach
                <button type="submit" class="btn float-end mt-2" style="background-color: #1F5F96; color:white;">
                    {{ __('PROGRAMAS') }}
                </button><br>
            </form>
            <a class="float-right mt-2" href="#"><p><strong>Instituto Tecnológico de Salina Cruz.</strong></p></a>
        </div>
        <hr>
    </div>
    <div class="container_card">
        <div class="row">
            <div class="col">
                <div class="card-group">
                    @foreach ( $proyectos as $p )
                        <div class="card text-center border-dark">
                            @if ($p->status == 3)
                                <div class="card-header" style="background-color: rgb(34, 139, 34); color:white;">
                                    <i class="fas fa-check-circle"></i><strong> DISPONIBLE</strong></div>
                            @endif
                            <div class="card-body">
                                <li class="list-group-item">
                                    <strong>PROYECTO:</strong>
                                    <p class="card-text">{{$p->proyectograma->nombre}}</p>
                                </li>
                                <li class="list-group-item">
                                    <strong>EMPRESA:</strong>
                                    <p class="card-text">{{$p->proyectograma->empresa->nombre}}</p>
                                </li>
                                <li class="list-group-item">
                                    <strong>TITULAR:</strong>
                                    <p class="card-text">{{$p->proyectograma->empresa->titular}}</p>
                                </li>
                                <li class="list-group-item">
                                    <strong>No. ALUMNOS:</strong>
                                    <p class="card-text">{{$p->proyectograma->nalumnos}}</p>
                                </li>
                                <li class="list-group-item">
                                    <strong>OBJETIVO:</strong>
                                    <p class="card-text">{{$p->objetivo}}</p>
                                </li>
                                <li class="list-group-item">
                                    <strong>PROBLEMATICA:</strong>
                                    <p class="card-text">{{$p->problematica}}</p>
                                </li>
                            </div>
                                <div>
                                    @if ($p->status == 3)
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn" style="background-color: #1F5F96; color:white"
                                        data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            Solicitud
                                        </button>
                                    @endif
                                </div>
                            <div class="card-footer text-muted">
                                <strong>Fecha Limite: {{ $p->proyectograma->flimite }}</strong>
                            </div>
                        </div>
                        <br>
                        <br>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <hr>
    <ul class="pagination justify-content-center">
        {{ $proyectos->links() }}
    </ul>


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" style="background-color: rgba(0,2,50,0.4);">>
        <div class="modal-dialog modal-dialog-scrollable modal-xl">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #1F5F96; color:white;">
                    <h5 class="modal-title" id="exampleModalLabel">DETALLES DEL PROYECTO</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="background-color:white;"></button>
                </div>
                <div class="modal-body">
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <label for="proyecto" class="form-label" style="color:#1F5F96"><strong>Proyecto:</strong></label>
                            @if (isset($p->proyectograma->nombre))
                                <input type="text"class="form-control" id="proyecto" value="{{$p->proyectograma->nombre}}" readonly>
                                @else
                                <input type="text"class="form-control" id="proyecto" value="" readonly>
                            @endif
                        </div>
                        <div class="col-md-8"><br>
                            <label for="proyecto" class="form-label" style="color:#1F5F96"><strong>Empresa:</strong></label>
                            @if (isset($p->proyectograma->empresa->nombre))
                                <input type="text"class="form-control" id="proyecto" value="{{$p->proyectograma->empresa->nombre}}" readonly>
                                @else
                                <input type="text"class="form-control" id="proyecto" value="" readonly>
                            @endif
                        </div>
                        <div class="col-md-2"><br>
                            <label for="proyecto" class="form-label" style="color:#1F5F96"><strong>Fecha Limite:</strong></label>
                            @if (isset($p->proyectograma->flimite))
                                <input type="text"class="form-control" id="proyecto" value="{{$p->proyectograma->flimite}}" readonly>
                                @else
                                <input type="text"class="form-control" id="proyecto" value="" readonly>
                            @endif
                        </div>
                        <div class="col-md-2"><br>
                            <label for="proyecto" class="form-label" style="color:#1F5F96"><strong>No Alumnos:</strong></label>
                            @if (isset($p->proyectograma->nalumnos))
                                <input type="text"class="form-control" id="proyecto" value="{{$p->proyectograma->nalumnos}}" readonly>
                                @else
                                <input type="text"class="form-control" id="proyecto" value="" readonly>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="modal-header" style="background-color: #1F5F96; color:white;">
                    <h5 class="modal-title" id="exampleModalLabel">DATOS DEL RESIDENTE</h5>
                </div>
                <div class="modal-body">
                    <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="proyecto" class="form-label" style="color:#1F5F96"><strong>Apellido Paterno:</strong></label>
                                @if (isset($sql1))
                                    @foreach ( $sql1 as $a )
                                        <input type="text" class="form-control" id="apaterno" name="apaterno" value="{{$a->apaterno}}" readonly>
                                    @endforeach
                                @else
                                    <input type="text" class="form-control" id="apaterno" name="apaterno" placeholder="Primer Apellido.." readonly>
                                @endif
                            </div>
                            <div class="col-md-6">
                                <label for="proyecto" class="form-label" style="color:#1F5F96"><strong>Apellido Materno:</strong></label>
                                @if (isset($sql1))
                                    @foreach ( $sql1 as $a )
                                        <input type="text" class="form-control" id="amaterno" name="amaterno" value="{{$a->amaterno}}" readonly>
                                    @endforeach
                                @else
                                    <input type="text" class="form-control" id="amaterno" name="amaterno" placeholder="Segundo Apellido.." readonly>
                                @endif
                            </div>
                            <div class="col-md-6"><br>
                                <label for="proyecto" class="form-label" style="color:#1F5F96"><strong>Nombre:</strong></label>
                                @if (isset($sql1))
                                    @foreach ( $sql1 as $a )
                                        <input type="text" class="form-control" id="nombre" name="nombre" value="{{$a->nombre}}" readonly>
                                    @endforeach
                                @else
                                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre.." readonly>
                                @endif
                            </div>
                            <div class="col-md-6"><br>
                                <label for="proyecto" class="form-label" style="color:#1F5F96"><strong>Carrera:</strong></label>
                                @if (isset($sql1))
                                    @foreach ( $sql1 as $a )
                                        <input type="text" class="form-control" id="carrerra" name="carrerra" value="{{$a->carrera->nombre}}" readonly>
                                    @endforeach
                                @else
                                    <input type="text" class="form-control" id="carrerra" name="carrerra" placeholder="Carrera.." readonly>
                                @endif
                            </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn" style="background-color: #1F5F96; color:white" data-bs-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-danger"><i class="fas fa-file-pdf"></i> Imprimir</button>
                </div>
            </div>
        </div>
    </div>
@endsection

