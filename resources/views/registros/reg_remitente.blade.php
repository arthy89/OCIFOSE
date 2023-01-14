@extends('adminlte::page')

@section('title', 'Registrar')

@section('content_header')
    <h1>Registro del Remitente</h1>
@stop

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form action=" {{ route('store') }} " method="POST">

                    @csrf

                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h4><i class="fas fa-edit"></i>Registro de datos personales y concernientes al documento ingresado</h4>
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
                                            <input type="text" class="form-control is-invalid" placeholder="Nombres" name="nombre">
                                        </div>
                                    @else    
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                                            </div>
                                            <input type="text" class="form-control" placeholder="Nombres" name="nombre" value="{{old('nombre')}}">
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
                                        <input type="text" class="form-control is-invalid" placeholder="Apellidos" name="apellido">
                                    </div>
                                    @else    
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Apellidos" name="apellido" value="{{old('apellido')}}">
                                    </div>
                                    @endif
                                </div>
                                {{-- numero de expediente --}}
                                <div class="col-md-4">

                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-file"></i></span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Número de expediente" name="num_exp" value="{{old('num_exp')}}">
                                    </div>

                                </div>
                                {{-- cargo --}}
                                <div class="col-md-4">
                                    @if ($errors->has('cargo'))
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-user-tie"></i></span>
                                        </div>
                                        <input type="text" class="form-control is-invalid" placeholder="Cargo" name="cargo">
                                    </div>
                                    @else
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-user-tie"></i></span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Cargo" name="cargo" value="{{old('cargo')}}">
                                    </div>
                                    @endif
                                </div>
                                {{-- entidad --}}
                                <div class="col-md-4">
                                    @if ($errors->has('entidad'))
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-building"></i></span>
                                        </div>
                                        <input type="text" class="form-control is-invalid" placeholder="Entidad" name="entidad">
                                    </div>
                                    @else
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-building"></i></span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Entidad" name="entidad" value="{{old('entidad')}}">
                                    </div>
                                    @endif
                                </div>

                                {{-- detalles entidad --}}
                                <div class="col-md-4">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-building"></i></span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Detalles de la entidad" name="entidad_det" value="{{old('entidad_det')}}">
                                    </div>
                                </div>

                                {{-- asunto --}}
                                <div class="col-md-8">
                                    @if ($errors->has('asunto'))
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-book"></i></span>
                                        </div>
                                        <input type="text" class="form-control is-invalid" placeholder="Asunto de la solicitud ingresante" name="asunto">
                                    </div>
                                    @else
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-book"></i></span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Asunto de la solicitud ingresante" name="asunto" value="{{old('asunto')}}">
                                    </div>
                                    @endif
                                </div>

                                {{-- fecha --}}
                                <div class="col-md-2">
                                    @if ($errors->has('fecha'))
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-calendar-week"></i></span>
                                        </div>
                                        <input type="text" class="form-control is-invalid" placeholder="Fecha" name="fecha">
                                    </div>
                                    @else
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-calendar-week"></i></span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Fecha" name="fecha" value="{{old('fecha')}}">
                                    </div>
                                    @endif
                                </div>
                                {{-- hora --}}
                                <div class="col-md-2">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-clock"></i></span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Hora" name="hora" value="{{old('hora')}}">
                                    </div>
                                </div>

                                {{-- Detalles --}}
                                <div class="col-md-12">
                                    @if ($errors->has('detalles'))
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-tag"></i></span>
                                        </div>
                                        <textarea class="form-control is-invalid" name="detalles" rows="2" placeholder="Detalles relacionados con la solicitud"></textarea>
                                    </div>
                                    @else
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-tag"></i></span>
                                        </div>
                                        <textarea class="form-control" name="detalles" rows="2" placeholder="Detalles relacionados con la solicitud">{{old('detalles')}}</textarea>
                                    </div>
                                    @endif
                                </div>
                            </div>

                            <hr>

                            <h6><strong>Referencias de la Solicitud</strong></h6>
                            <div class="row">
                                {{-- referencia --}}
                                <div class="col-md-6">
                                    @if ($errors->has('doc_ref'))
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-paste"></i></span>
                                        </div>
                                        <input type="text" class="form-control is-invalid" placeholder="Documentos de referencia" name="doc_ref">
                                    </div>
                                    @else
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-paste"></i></span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Documentos de referencia" name="doc_ref" value="{{old('doc_ref')}}">
                                    </div>
                                    @endif
                                </div>
                                {{-- folios --}}
                                <div class="col-md-2">
                                    @if ($errors->has('folios'))
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-file"></i></span>
                                        </div>
                                        <input type="text" class="form-control is-invalid" placeholder="Folios" name="folios">
                                    </div>
                                    @else
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-file"></i></span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Folios" name="folios" value="{{old('folios')}}">
                                    </div>
                                    @endif
                                </div>
                                {{-- origen --}}
                                <div class="col-md-4">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><strong>ORIGEN&nbsp&nbsp</strong><i class="fas fa-inbox"></i></span>
                                        </div>
                                        <select class="form-control" name="origen">
                                            <option>Interno</option>
                                            <option>Externo</option>
                                        </select>
                                    </div>
                                </div>
                                {{-- elementos adjuntos --}}
                                <div class="col-md-12">
                                    @if ($errors->has('ele_adj'))
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-folder"></i></span>
                                        </div>
                                        <input type="text" class="form-control is-invalid" placeholder="Elementos adjuntos | puede ingresar enlaces o criterios correspondientes a la solicitud" name="ele_adj">
                                    </div>
                                    @else
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-folder"></i></span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Elementos adjuntos | puede ingresar enlaces o criterios correspondientes a la solicitud" name="ele_adj" value="{{old('ele_adj')}}">
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>

                        {{-- footer --}}
                        <div class="card-footer">                        
                            <div class="text-right">
                                <button type="button" class="btn btn-danger">Limpiar</button>
                                <button type="submit" class="btn btn-primary">Guardar Remitente</button>
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