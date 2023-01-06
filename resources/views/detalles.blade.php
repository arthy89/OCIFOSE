@extends('adminlte::page')

@section('title', 'Detalles - '. $remitente_->rem_name)

@section('content_header')
    <h1>Detalles del Remitente</h1>
@stop

@section('content')
    <p>Visualizamos los detalles del remitente <strong>{{ $remitente_->rem_name }}</strong> </p>

    <div class="container-fluid">
    
        <a href=" {{ route('pruebas') }} " class="btn btn-primary">Regresar</a>
        
        
    </div>

    <br>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-success">
                    <div class="card-header"><h5>Detalles para editar de <strong>{{ $remitente_->rem_name }}</strong> </h5></div>
                    <div class="card-body">
                        {{-- nombre --}}
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nombre</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                </div>
                                <input type="text" class="form-control" placeholder="Nombres" value="{{ $remitente_->rem_name }}" disabled>
                            </div>
                        </div>
                        {{-- apellidos --}}
                        <div class="form-group">
                            <label for="exampleInputEmail1">Apellidos</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                </div>
                                <input type="text" class="form-control" placeholder="Apellidos" value="{{ $remitente_->rem_apell }}" disabled>
                            </div>
                        </div>
                        {{-- entidad --}}
                        <div class="form-group">
                            <label for="exampleInputEmail1">Entidad</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-building"></i></span>
                                </div>
                                <input type="text" class="form-control" placeholder="Entidad" value="{{ $remitente_->rem_ofi_ent }}" disabled>
                            </div>
                        </div>
                        {{-- entidad detalles --}}
                        {{-- <div class="form-group">
                            <label for="exampleInputEmail1">Apellidos</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-building"></i></span>
                                </div>
                                <input type="text" class="form-control" placeholder="Entidad detalles" value="{{ $remitente_->rem_ofi_ent_det }}">
                            </div>
                        </div> --}}
                        {{-- cargo --}}
                        <div class="form-group">
                            <label for="exampleInputEmail1">Cargo</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-user-tie"></i></span>
                                </div>
                                <input type="text" class="form-control" placeholder="Cargo" value="{{ $remitente_->rem_cargo }}" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="text-right">
                            <form action=" {{ route('destro_rem', $remitente_)}}" method="POST">
                                @csrf
                                @method('delete')
                                <a href=" {{ route('edit', $remitente_) }} " class="btn btn-warning">Editar</a>
                                <button type="submit" class="btn btn-danger">Eliminar Remitente</button>
                            </form>
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