@extends('adminlte::page')

@section('title', 'Informe')

@section('content_header')
    <h1>OFICIO</h1>
@stop

@section('content')
    <p>Redactamos el oficio</p>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h5>Redactar Informe Número: 
                                @if(empty($oficio_num->ofi_num))
                                    001
                                @else
                                    @if(strlen($oficio_num->ofi_num) == 1)
                                        00{{$oficio_num->ofi_num +1}}
                                    @elseif(strlen($oficio_num->ofi_num) == 2)
                                        0{{$oficio_num->ofi_num + 1}}
                                    @elseif(strlen($oficio_num->ofi_num) == 3)
                                        {{$oficio_num->ofi_num + 1}}
                                    @endif
                                @endif
                            </h5>
                        </div>
                        <form action=" {{ route('generar_ofi', $registro->id_rr) }} " method="POST">

                            @csrf   
                            <div class="card-body">

                                {{-- Cuerpo --}}
                                @if ($errors->has('cuerpo'))
                                <div class="form-group">
                                    <label>Cuerpo</label>
                                    <textarea name="cuerpo" rows="3" class="form-control is-invalid"></textarea>
                                </div>
                                @else 
                                <div class="form-group">
                                    <label >Cuerpo</label>
                                    <textarea name="cuerpo" rows="3" class="form-control">Es grato dirigirme a usted con relación a la referencia, en donde se establece el proceso de implementación del Sistema de Control Interno (SCI) que tiene como finalidad /REDATAR/ "{{$registro->rr_asunto}}" {{$remitente[0]->rem_ofi_ent}}.</textarea>
                                </div>
                                @endif

                                {{-- Cuerpo 2 --}}
                                @if ($errors->has('cuerpo2'))
                                <div class="form-group">
                                    <label>Cuerpo 2</label>
                                    <textarea name="cuerpo2" rows="5" class="form-control is-invalid"></textarea>
                                </div>
                                @else 
                                <div class="form-group">
                                    <label >Cuerpo 2</label>
                                    <textarea name="cuerpo2" rows="5" class="form-control" disabled>Al respecto, como resultado de la ejecución del citado servicio relacionado, ha emitido el informe INFORME DE HITO DE CONTROL N° {{$informe->inf_num}}-2022/OCI/0741-SCC  de la fecha {{$registro->rr_fec}}, con el propósito que, en su calidad de titular de la entidad evaluada, disponga las acciones necesarias para la implementación de las recomendaciones consignadas en dicho informe, respecto de las cuales se servirá informar a este Órgano de Control Institucional, quien será el encargado de efectuar el seguimiento de la adopción de tales medidas.
                                    
Es propicia la oportunidad para expresarle las seguridades de mi especial consideración y estima.</textarea>
                                </div>
                                @endif
                                
                            </div>
                        

                            <div class="card-footer text-right">
                                    <button type="submit" class="btn btn-primary">Guardar Oficio</button>
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