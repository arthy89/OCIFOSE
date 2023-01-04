@extends('adminlte::page')

@section('title', 'Buscar')

@section('content_header')
    <h1>Buscar registro</h1>
@stop

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <h5>Buscar Expediente</h5>
                    </div>
                    <div class="card-body">
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
                        </div>
                    </div>
                    <div class="card-footer">                        
                        <div class="text-right">
                            <button type="button" class="btn btn-danger">Limpiar</button>
                            <button type="button" class="btn btn-primary">Buscar</button>
                        </div>
                        
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
    <script> console.log('Hi!'); </script>
@stop