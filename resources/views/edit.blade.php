@extends('adminlte::page')

@section('title', 'FOSE Edit')

@section('content_header')
    <h1>Edición de datos sobre el FOSE</h1>
@stop

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form action=" {{ route('update', $rem_edit) }} " method="POST">

                    @csrf

                    @method('put')

                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h4><i class="fas fa-edit"></i>Formato de Seguimiento del Expediente (FOSE)</h4>
                        </div>
                        <div class="card-body">
                            <h6><strong>Datos del Remitente</strong></h6>
                            <div class="row">
                                <div class="col-md-4">
                                    {{-- nombre --}}
                                    @if ($errors->has('nombre'))
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                                        </div>
                                        <input type="text" class="form-control is-invalid" placeholder="Nombres" name="nombre" value=" {{ $rem_edit->rem_name }} ">
                                    </div>
                                    @else
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Nombres" name="nombre" value=" {{ old('nombre', $rem_edit->rem_name) }} ">
                                    </div>
                                    @endif
                                </div>
                                {{-- apellido --}}
                                <div class="col-md-4">
                                    @if ($errors->has('apellido'))
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                                        </div>
                                        <input type="text" class="form-control is-invalid" placeholder="Apellidos" name="apellido" value=" {{ $rem_edit->rem_apell }} ">
                                    </div>
                                    @else
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Apellidos" name="apellido" value=" {{  old('apellido', $rem_edit->rem_apell) }} ">
                                    </div>
                                    @endif
                                </div>
                                {{-- numero de expediente --}}
                                <div class="col-md-4">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-file"></i></span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Número de expediente" name="num_exp">
                                    </div>
                                </div>
                                {{-- cargo --}}
                                <div class="col-md-4">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-user-tie"></i></span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Cargo" name="cargo">
                                    </div>
                                </div>
                                {{-- entidad --}}
                                <div class="col-md-4">
                                    @if ($errors->has('entidad'))
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-building"></i></span>
                                        </div>
                                        <input type="text" class="form-control is-invalid" placeholder="Entidad" name="entidad" value=" {{ $rem_edit->rem_ofi_ent }} ">
                                    </div>
                                    @else
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-building"></i></span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Entidad" name="entidad" value=" {{ old('entidad', $rem_edit->rem_ofi_ent) }} ">
                                    </div>
                                    @endif
                                </div>
                                {{-- fecha --}}
                                <div class="col-md-2">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-calendar-week"></i></span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Fecha" name="fecha">
                                    </div>
                                </div>
                                {{-- hora --}}
                                <div class="col-md-2">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-clock"></i></span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Hora" name="hora">
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
                                        <input type="text" class="form-control" placeholder="Asunto" name="asunto">
                                    </div>
                                </div>
                                {{-- referencia --}}
                                <div class="col-md-4">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-paste"></i></span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Documentos de referencia" name="doc_ref">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-inbox"></i></span>
                                        </div>
                                        <select class="form-control" name="origen">
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
                                <button type="submit" class="btn btn-primary">Actualizar Cambios</button>
                            </div>
                            
                        </div>
                    </div>
                </form>
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