@extends('adminlte::page')

@section('title', 'Registros')

@section('content_header')
    <h1>Registros</h1>
@stop

@section('content')
    <p>Todos los registros encontrados en el sistema</p>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-danger card-outline">
                        <div class="card-header">
                            Todos los Registros
                        </div>
                        <div class="card-body">
                            <table id="registro" class="table table-striped shadow p-3 mb-5 bg-body rounded mt-4">
                                <thead class="bg-danger text-white">
                                    <tr>
                                        <th>ID</th>
                                        <th>NOMBRES Y APELLIDOS</th>
                                        <th width="300px">ASUNTO</th>
                                        <th>DOCUMENTO DE REFERENCIA</th>
                                        <th>ENTIDAD</th>
                                        <th>FECHA</th>
                                        <th>OPCIONES</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($registros as $registro)
                                        <tr>
                                            <td> {{ $registro->id_rr }}</td>
                                            {{-- para el nombre --}}
                                            <td> @foreach($remitentes as $remitente)
                                                    @if($remitente->id_rem == $registro->id_rem)
                                                    {{$remitente->rem_name}} {{$remitente->rem_apell}}
                                                    @endif
                                                @endforeach
                                            </td>
                                            <td> {{ $registro->rr_asunto }}</td>
                                            {{-- DOCUMENTO REFERENCIA --}}
                                            <td> {{ $registro->rr_ref }} </td>
                                            <td> @foreach($remitentes as $remitente)
                                                    @if($remitente->id_rem == $registro->id_rem)
                                                    {{$remitente->rem_ofi_ent}}
                                                    @endif
                                                @endforeach
                                            </td>
                                            <td> {{ $registro->rr_fec }}</td>
                                            <td>
                                                <form action="{{route('eliminar_registro', $registro)}}" method="POST">
                                                    @csrf
                                                    @method('delete')
                                                    <a href="{{ route('editar_registro', $registro->id_rr) }}" class="btn btn-warning btn-sm">Editar</a>&nbsp<a href="{{route('accion', $registro->id_rr) }}" class="btn btn-danger btn-sm">Acción</a>
                                                    <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer">
                            <div class="text-right">
                                {{-- <button class="btn btn-primary">Siguiente</button> --}}
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
@stop

@section('js')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>

    <script>
        $(document).ready(function () {
            $('#registro').DataTable(
                {
                    "language":{
                        "search":       "Buscar",
                        "lengthMenu":   "Mostrar _MENU_ registros por página",
                        "info":         "Mostrando página _PAGE_ de _PAGES_",
                        "paginate":     {
                                        "previous":  "Anterior",
                                        "next":     "Siguiente",
                                        "first":    "Primero",
                                        "last":     "Último"
                        }

                    }
                }
            );
        });
    </script>

@stop