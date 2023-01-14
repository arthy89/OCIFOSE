@extends('adminlte::page')

@section('title', 'Informe')

@section('content_header')
    <h1>FOSE</h1>
@stop

@section('content')
    <p>Guardamos el FOSE</p>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-danger">
                        <div class="card-header">
                            <h5>Guardar FOSE Número: 
                                @if(empty($registro->id_rr))
                                    001
                                @else
                                    @if(strlen($registro->id_rr) == 1)
                                        00{{$registro->id_rr}}
                                    @elseif(strlen($registro->id_rr) == 2)
                                        0{{$registro->id_rr}}
                                    @elseif(strlen($registro->id_rr) == 3)
                                        {{$registro->id_rr}}
                                    @endif
                                @endif
                            </h5>
                        </div>
                        <form action=" {{ route('generar_fose', $registro->id_rr) }} " method="POST">

                            @csrf   

                            <div class="card-body">
                                <div class="row">
                                    {{-- remitente --}}
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="">Remitente</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                                </div>
                                                <input type="text" class="form-control" disabled value="{{$remitente[0]->rem_name}} {{$remitente[0]->rem_apell}}">
                                            </div>
                                        </div>
                                    </div>

                                    {{-- expediente --}}
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="">Expediente</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fa fa-file-export"></i></span>
                                                </div>
                                                <input type="text" class="form-control" readonly name="fose_num" value="@if(empty($registro->id_rr))0741-2022-001 @else @if(strlen($registro->id_rr) == 1) 0741-2022-00{{$registro->id_rr}}@elseif(strlen($registro->id_rr) == 2) 0741-2022-0{{$registro->id_rr}}@elseif(strlen($registro->id_rr) == 3){{$registro->id_rr}}@endif @endif">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {{-- fila 2 --}}
                                <div class="row">
                                    {{-- cargo --}}
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="">Cargo</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-user-tie"></i></span>
                                                </div>
                                                <input type="text" class="form-control" readonly value="{{$remitente[0]->rem_cargo}}">
                                            </div>
                                        </div>
                                    </div>

                                    {{-- fecha --}}
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="">Fecha</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fa fa-calendar-week"></i></span>
                                                </div>
                                                <input type="text" class="form-control" readonly name="fecha" value="{{$registro->rr_fec}}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                {{-- fila 3 --}}
                                <div class="row">
                                    {{-- entidad --}}
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="">Entidad</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-building"></i></span>
                                                </div>
                                                <input type="text" class="form-control" readonly value="{{$remitente[0]->rem_ofi_ent}}">
                                            </div>
                                        </div>
                                    </div>

                                    {{-- Hora --}}
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="">Hora</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fa fa-clock"></i></span>
                                                </div>
                                                <input type="text" class="form-control" readonly name="hora" value="{{$registro->rr_hor}}">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {{-- fila 4 --}}
                                <div class="row">
                                    {{-- asunto --}}
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="">Asunto</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fa fa-book"></i></span>
                                                </div>
                                                <input type="text" class="form-control" readonly value="{{$registro->rr_asunto}}">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {{-- fila 5 --}}
                                <div class="row">
                                    {{-- documento --}}
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="">Documento de Referencia (Documento que ingresó)</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-paste"></i></span>
                                                </div>
                                                <input type="text" class="form-control" readonly value="{{$registro->rr_ref}}">
                                            </div>
                                        </div>
                                    </div>

                                    {{-- folios --}}
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="">Folios</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fa fa-file"></i></span>
                                                </div>
                                                <input type="text" class="form-control" readonly value="{{$registro->rr_fols}}">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {{-- fila 6 --}}
                                <div class="row">
                                    {{-- folios --}}
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="">Elementos adjuntos</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fa fa-folder"></i></span>
                                                </div>
                                                <input type="text" class="form-control" readonly value="{{$registro->rr_adj}}">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {{-- fila 7 --}}
                                <div class="row">
                                    {{-- ACCION --}}
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="">ACCIÓN</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fa fa-gavel"></i></span>
                                                </div>
                                                <input type="text" class="form-control" readonly name="accion" value="@if(strlen($informe->inf_num) == 1)INFORME DE HITO DE CONTROL N° 00{{$informe->inf_num}}-2023/OCI/0741-SCC @elseif(strlen($informe->inf_num) == 2)INFORME DE HITO DE CONTROL N° 0{{$informe->inf_num}}-2023/OCI/0741-SCC @elseif(strlen($informe->inf_num) == 3) INFORME DE HITO DE CONTROL N° {{$informe->inf_num}}-2023/OCI/0741-SCC @endif">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-right">
                                    <button type="submit" class="btn btn-danger">Guardar FOSE</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    {{-- <script> console.log('Hi!'); </script> --}}
@stop