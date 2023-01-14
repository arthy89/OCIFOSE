@extends('adminlte::page')

@section('title', 'Editar Registro')

@section('content_header')
    <h1>Edición de datos sobre el registro del remitente</h1>
@stop

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                
                <form action=" {{ route('actualizar_registro', $registro) }} " method="POST">

                    @csrf

                    @method('put')


                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h4><i class="fas fa-edit"></i>Registro de datos personales y concernientes al documento ingresado</h4>
                        </div>
                        <div class="card-body">
                            @foreach ($remitente as $rem)
                            @if($rem->id_rem == $registro->id_rem)
                            <h6><strong>Datos del Remitente</strong></h6>
                            <div class="row">
                                <div class="col-md-4">
                                    {{-- nombre --}}
                                    @if ($errors->has('nombre'))
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                                        </div>
                                        <input type="text" class="form-control is-invalid" placeholder="Nombres" name="nombre" value="{{$rem->rem_name}}">
                                    </div>
                                    @else
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Nombres" name="nombre" value="{{old('nombre',$rem->rem_name)}}">
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
                                        <input type="text" class="form-control is-invalid" placeholder="Apellidos" name="apellido" value="{{$rem->rem_apell}}">
                                    </div>
                                    @else
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Apellidos" name="apellido" value="{{old('apellido', $rem->rem_apell)}}">
                                    </div>
                                    @endif
                                </div>
                                {{-- numero de expediente --}}
                                <div class="col-md-4">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-file"></i></span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Número de expediente" name="num_exp" value="{{old('num_exp', $registro->rem_exp)}}">
                                    </div>
                                </div>
                                {{-- cargo --}}
                                <div class="col-md-4">
                                    @if ($errors->has('cargo'))
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-user-tie"></i></span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Cargo" name="cargo" value="{{$rem->rem_cargo}}">
                                    </div>
                                    @else
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-user-tie"></i></span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Cargo" name="cargo" value="{{old('cargo', $rem->rem_cargo)}}">
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
                                        <input type="text" class="form-control is-invalid" placeholder="Entidad" name="entidad" value="{{ $rem->rem_ofi_ent }}">
                                    </div>
                                    @else
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-building"></i></span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Entidad" name="entidad" value="{{old('entidad', $rem->rem_ofi_ent)}}">
                                    </div>
                                    @endif
                                </div>
                                {{-- detalles entidad --}}
                                <div class="col-md-4">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-building"></i></span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Detalles de la entidad" name="entidad_det" value="{{old('entidad_det', $rem->rem_ofi_ent_det)}}">
                                    </div>
                                </div>
                                {{-- asunto --}}
                                <div class="col-md-8">
                                    @if ($errors->has('asunto'))
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-book"></i></span>
                                        </div>
                                        <input type="text" class="form-control is-invalid" placeholder="Asunto de la solicitud ingresante" name="asunto" value="{{ $registro->rr_asunto }}">
                                    </div>
                                    @else
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-book"></i></span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Asunto de la solicitud ingresante" name="asunto" value="{{old('asunto',$registro->rr_asunto)}}">
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
                                        <input type="text" class="form-control" placeholder="Fecha" name="fecha" value="{{ $registro->rr_fec }}">
                                    </div>
                                    @else
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-calendar-week"></i></span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Fecha" name="fecha" value="{{old('fecha',$registro->rr_fec)}}">
                                    </div>
                                    @endif
                                </div>
                                {{-- hora --}}
                                <div class="col-md-2">
                                    @if ($errors->has('hora'))
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-clock"></i></span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Hora" name="hora" value="{{ $registro->rr_hor }}">
                                    </div>
                                    @else
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-clock"></i></span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Hora" name="hora" value="{{old('hora', $registro->rr_hor)}}">
                                    </div>
                                    @endif
                                </div>
                                {{-- Detalles --}}
                                <div class="col-md-12">
                                    @if ($errors->has('detalles'))
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-tag"></i></span>
                                        </div>
                                        <textarea class="form-control is-invalid" name="detalles" rows="2" placeholder="Detalles relacionados con la solicitud">{{ $registro->rr_detalle }}</textarea>
                                    </div>
                                    @else
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-tag"></i></span>
                                        </div>
                                        <textarea class="form-control" name="detalles" rows="2" placeholder="Detalles relacionados con la solicitud">{{old('detalles',$registro->rr_detalle)}}</textarea>
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
                                        <input type="text" class="form-control is-invalid" placeholder="Documentos de referencia" name="doc_ref" value="{{ $registro->rr_ref }}">
                                    </div>
                                    @else
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-paste"></i></span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Documentos de referencia" name="doc_ref" value="{{old('doc_ref',$registro->rr_ref)}}">
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
                                        <input type="text" class="form-control is-invalid" placeholder="Folios" name="folios" value="{{ $registro->rr_fols }}">
                                    </div>
                                    @else
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-file"></i></span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Folios" name="folios" value="{{old('folios',$registro->rr_fols)}}">
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
                                            <option>{{ $registro->rr_ori }}</option>
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
                                        <input type="text" class="form-control is-invalid" placeholder="Elementos adjuntos | puede ingresar enlaces o criterios correspondientes a la solicitud" name="ele_adj" value="{{ $registro->rr_adj }}">
                                    </div>
                                    @else
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-folder"></i></span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Elementos adjuntos | puede ingresar enlaces o criterios correspondientes a la solicitud" name="ele_adj" value="{{old('ele_adj',$registro->rr_adj)}}">
                                    </div>
                                    @endif
                                </div>
                            </div>
                            @endif
                            @endforeach
                        </div>

                        {{-- footer --}}
                        <div class="card-footer">                        
                            <div class="text-right">
                                <button type="submit" class="btn btn-primary">Actualizar Cambios</button>
                            </div>
                            
                        </div>
                    </div>
                </form>
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