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
                    <div class="card-header"><h5>Detalles sobre <strong>{{ $remitente_->rem_name }}</strong> </h5></div>
                    <div class="card-body">
                        <h5><strong>Sobre el Remitente</strong></h5>
                        <hr>
                        <div class="row">
                            {{-- nombre --}}
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nombres</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Nombres" value="{{ $remitente_->rem_name }}" disabled>
                                    </div>
                                </div>
                            </div>

                            {{-- apellidos --}}
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Apellidos</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Nombres" value="{{ $remitente_->rem_apell }}" disabled>
                                    </div>
                                </div>
                            </div>
                            {{-- cargo --}}
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Cargo</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-user-tie"></i></span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Nombres" value="{{ $remitente_->rem_cargo }}" disabled>
                                    </div>
                                </div>
                            </div>
                            {{-- entidad --}}
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Entidad</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-building"></i></span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Nombres" value="{{ $remitente_->rem_ofi_ent }}" disabled>
                                    </div>
                                </div>
                            </div>
                            {{-- detalles entidad --}}
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Detalles de la entidad</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-building"></i></span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Nombres" value="{{ $remitente_->rem_ofi_ent_det }}" disabled>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- ingreso de la solicitud --}}
                        <h5><strong>Sobre el ingreso de la solicitud</strong></h5>

                            <hr>
                        <div class="row">
                            
                            {{-- fecha --}}
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Detalles de la entidad</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-clock"></i></span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Nombres" value="{{ $reg_remitente_->rr_fec }}" disabled>
                                    </div>
                                </div>
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