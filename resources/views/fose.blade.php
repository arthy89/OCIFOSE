@extends('adminlte::page')

@section('title', 'FOSE')

@section('content_header')
    <h1>FOSE</h1>
@stop

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <h4><i class="fas fa-edit"></i>Formato de Seguimiento del Expediente (FOSE)</h4>
                    </div>
                    <div class="card-body">
                        <h6><strong>Datos del Remitente</strong></h6>
                        <div class="row">
                            <div class="col-md-4">
                                {{-- nombre --}}
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Nombres">
                                </div>
                            </div>
                            {{-- apellido --}}
                            <div class="col-md-4">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Apellidos">
                                </div>
                            </div>
                            {{-- numero de expediente --}}
                            <div class="col-md-4">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-file"></i></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Número de expediente">
                                </div>
                            </div>
                            {{-- cargo --}}
                            <div class="col-md-4">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-user-tie"></i></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Cargo">
                                </div>
                            </div>
                            {{-- entidad --}}
                            <div class="col-md-4">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-building"></i></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Entidad">
                                </div>
                            </div>
                            {{-- fecha --}}
                            <div class="col-md-2">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-calendar-week"></i></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Fecha">
                                </div>
                            </div>
                            {{-- hora --}}
                            <div class="col-md-2">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-clock"></i></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Hora">
                                </div>
                            </div>
                        </div>

                        <hr>

                        <h6><strong>Referencias del Documento</strong></h6>
                        <div class="row">
                            {{-- asunto --}}
                            <div class="col-md-4">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-book"></i></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Asunto">
                                </div>
                            </div>
                            {{-- referencia --}}
                            <div class="col-md-4">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-paste"></i></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Documentos de referencia">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-inbox"></i></span>
                                    </div>
                                    <select class="form-control">
                                        <option>Interno</option>
                                        <option>Externo</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- footer --}}
                    <div class="card-footer">                        
                        <div class="text-right">
                            <button type="button" class="btn btn-danger">Limpiar</button>
                            <button href="accion.blade.php" type="button" class="btn btn-primary">Siguiente</button>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                
            </div>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop