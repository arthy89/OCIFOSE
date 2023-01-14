@extends('adminlte::page')

@section('title', 'Accines')

@section('content_header')
    <h1>Realizar Acciones</h1>
@stop

@section('content')
    <h4>Acciones disponibles del registro:</h4>

    
    <p><strong>Nombres y Apellidos: </strong> {{$remitente[0]->rem_name}} {{$remitente[0]->rem_apell}}</p>
    <p><strong>Cargo: </strong> {{$remitente[0]->rem_cargo}}</p>

    <p><strong>Asunto: </strong> {{$registro->rr_asunto}}</p>

    {{-- @if(strlen($informe->id_rr) = 1)
    00{{$informe->inf_num}}
    @endif --}}

    <div class="row">
        <div class="col-md-4">
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>Informe</h3>
                    <p><strong>Último Informe:</strong>
                        @if(empty($informe->inf_num))
                            Sin registro
                        @else
                            @if(strlen($informe->inf_num) == 1)
                                00{{$informe->inf_num}}
                            @elseif(strlen($informe->inf_num) == 2)
                                0{{$informe->inf_num}}
                            @elseif(strlen($informe->inf_num) == 3)
                                {{$informe->inf_num}}
                            @endif
                        @endif
                    </p>
                    <hr>
                    <strong>Registros Anteriores:</strong>
                    <p>
                        @foreach($informes as $inf)
                            @if($inf->id_rr == $registro->id_rr)
                                @if(strlen($inf->id_rr) == 1)
                                Informe: 00{{$inf->inf_num}} 
                                @elseif(strlen($inf->id_rr) == 2)
                                Informe: 0{{$inf->inf_num}}
                                @elseif(strlen($inf->id_rr) == 2)
                                Informe: {{$inf->inf_num}} 
                                @endif
                                <a href="{{route('recuperar_pdf_inf',[$registro->id_rr, $inf->inf_num])}}" class="btn btn-danger btn-sm"><i class="fas fa-arrow-circle-down"></i></a> <br> 
                            @endif
                        @endforeach
                    </p>

                </div>
                <div class="icon">
                    <i class="fas fa-folder-open"></i>
                </div>
                <a href="{{route('crear_inf',$registro->id_rr)}}" class="small-box-footer">
                Realizar informe <i class="fas fa-arrow-circle-right"></i>
                </a>
                <a href="{{route('generar_pdf_inf',$registro->id_rr)}}" class="small-box-footer">
                Generar último informe <i class="fas fa-arrow-circle-down"></i>
                </a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="small-box bg-primary">
                <div class="inner">
                    <h3>Oficio</h3>
                    <p><strong>Último Oficio:</strong>
                        @if(empty($oficio->ofi_num))
                            Sin registro
                        @else
                            @if(strlen($oficio->ofi_num) == 1)
                                00{{$oficio->ofi_num}}
                            @elseif(strlen($oficio->ofi_num) == 2)
                                0{{$oficio->ofi_num}}
                            @elseif(strlen($oficio->ofi_num) == 3)
                                {{$oficio->ofi_num}}
                            @endif
                        @endif
                    </p>
                    <hr>
                    <strong>Registros Anteriores:</strong>
                    <p>
                        @foreach($oficios as $ofi)
                            @if($ofi->id_rr == $registro->id_rr)
                                @if(strlen($ofi->id_rr) == 1)
                                Oficio: 00{{$ofi->ofi_num}} 
                                @elseif(strlen($ofi->id_rr) == 2)
                                Oficio: 0{{$ofi->ofi_num}}
                                @elseif(strlen($ofi->id_rr) == 2)
                                Oficio: {{$ofi->ofi_num}} 
                                @endif
                                <a href="{{route('recuperar_pdf_ofi',[$registro->id_rr, $ofi->id_ofi])}}" class="btn btn-danger btn-sm"><i class="fas fa-arrow-circle-down"></i></a> <br> 
                            @endif
                        @endforeach
                    </p>
                </div>
                <div class="icon">
                    <i class="fas fa-edit"></i>
                </div>
                <a href="{{route('crear_ofi',$registro->id_rr)}}" class="small-box-footer">
                Realizar Oficio <i class="fas fa-arrow-circle-right"></i>
                </a>
                <a href="{{route('generar_pdf_ofi',$registro->id_rr)}}" class="small-box-footer">
                Generar útimo oficio <i class="fas fa-arrow-circle-down"></i>
                </a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="small-box bg-danger">
                <div class="inner">
                    <h3>FOSE</h3>
                    <p><strong>Último FOSE:</strong> 
                        @if(empty($fose->fose_num_id))
                            Sin registro
                        @else
                            {{$fose->fose_num_id}}
                        @endif
                    </p>
                    <hr>
                    <strong>Registros Anteriores:</strong>
                    <p>
                        @foreach($foses as $fos)
                            @if($fos->id_rr == $registro->id_rr)
                                FOSE: {{$fos->fose_num_id}} <a href="{{route('recuperar_pdf_fose',[$registro->id_rr, $fos->id_fose])}}" class="btn btn-success btn-sm"><i class="fas fa-arrow-circle-down"></i></a> <br> 
                            @endif
                        @endforeach
                    </p>
                </div>
                <div class="icon">
                    <i class="fa fa-file-invoice"></i>
                </div>
                <a href="{{route('crear_fose',$registro->id_rr)}}" class="small-box-footer">
                Realizar FOSE <i class="fas fa-arrow-circle-right"></i>
                </a>
                <a href="{{route('generar_pdf_fose',$registro->id_rr)}}" class="small-box-footer">
                Generar último FOSE  <i class="fas fa-arrow-circle-down"></i>
                </a>
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