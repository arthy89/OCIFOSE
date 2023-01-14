@extends('adminlte::page')

@section('title', 'Informe')

@section('content_header')
    <h1>INFORME</h1>
@stop

@section('content')
    <p>Redactamos el informe</p>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-info">
                        <div class="card-header">
                            <h5>Redactar Informe Número: 
                                @if(empty($informe_num->inf_num))
                                    001
                                @else
                                    @if(strlen($informe_num->inf_num) == 1)
                                        00{{$informe_num->inf_num +1}}
                                    @elseif(strlen($informe_num->inf_num) == 2)
                                        0{{$informe_num->inf_num + 1}}
                                    @elseif(strlen($informe_num->inf_num) == 3)
                                        {{$informe_num->inf_num + 1}}
                                    @endif
                                @endif
                            </h5>
                        </div>
                        <form action=" {{ route('generar_inf', $registro->id_rr) }} " method="POST">

                            @csrf   
                            <div class="card-body">
                                @foreach ($remitente as $rem)
                                @if($rem->id_rem == $registro->id_rem)
                                                                
                                {{-- titulo --}}
                                @if ($errors->has('inf_titulo'))
                                <div class="form-group">
                                    <label>Título del Informe</label>
                                    <textarea name="inf_titulo" rows="1" class="form-control is-invalid"></textarea>
                                </div>
                                @else 
                                <div class="form-group">
                                    <label >Título del Informe</label>
                                    <textarea name="inf_titulo" rows="1" class="form-control">{{old('inf_titulo')}}</textarea>
                                </div>
                                @endif

                                {{-- origen --}}
                                @if ($errors->has('origen'))
                                <div class="form-group">
                                    <label>Origen</label>
                                    <textarea name="origen" rows="1" class="form-control is-invalid">El presente informe se emite en mérito a lo dispuesto por el Órgano de Control Institucional de la Dirección Regional de Educación Puno, mediante el oficio presentado y registrado en el Sistema de Control Gubernamental - SCG, aprobada mediante Resolución de Contraloría n.° 218-2022-CG. </textarea>
                                </div>
                                @else 
                                <div class="form-group">
                                    <label >Origen</label>
                                    <textarea name="origen" rows="2" class="form-control">El presente informe se emite en mérito a lo dispuesto por el Órgano de Control Institucional de la Dirección Regional de Educación Puno, mediante el oficio presentado y registrado en el Sistema de Control Gubernamental - SCG, aprobada mediante Resolución de Contraloría n.° 218-2022-CG. </textarea>
                                </div>
                                @endif

                                {{-- objetivos --}}
                                <label>Objetivos</label>
                                {{-- general --}}
                                @if ($errors->has('obj_gen'))
                                <div class="form-group">
                                    <label>Objetivo General</label>
                                    <textarea name="obj_gen" rows="1" class="form-control is-invalid"></textarea>
                                </div>
                                @else 
                                <div class="form-group">
                                    <label >Objetivo General</label>
                                    <textarea name="obj_gen" rows="1" class="form-control">{{old('obj_gen')}}</textarea>
                                </div>
                                @endif
                                {{-- especifico --}}
                                @if ($errors->has('obj_esp'))
                                <div class="form-group">
                                    <label>Objetivo Específico</label>
                                    <textarea name="obj_esp" rows="1" class="form-control is-invalid"></textarea>
                                </div>
                                @else 
                                <div class="form-group">
                                    <label >Objetivo Específico</label>
                                    <textarea name="obj_esp" rows="1" class="form-control">{{old('obj_esp')}}</textarea>
                                </div>
                                @endif

                                {{-- alcance --}}
                                @if ($errors->has('alcance'))
                                <div class="form-group">
                                    <label>Alcance</label>
                                    <textarea name="alcance" rows="1" class="form-control is-invalid"></textarea>
                                </div>
                                @else 
                                <div class="form-group">
                                    <label >Alcance</label>
                                    <textarea name="alcance" rows="1" class="form-control">{{old('alcance')}}</textarea>
                                </div>
                                @endif

                                {{-- situaciones adversas --}}
                                @if ($errors->has('sit_adv'))
                                <div class="form-group">
                                    <label>Sitaciones Adversas</label>
                                    <textarea name="sit_adv" rows="2" class="form-control is-invalid">Es necesario precisar que {{$rem->rem_apell}} {{$rem->rem_name}}, quedando señalado en el informe {{$registro->rr_ref}} detallando los siguientes puntos: {{$registro->rr_detalle}}, documento ingresado en la fecha {{$registro->rr_fec}}.</textarea>
                                </div>
                                @else 
                                <div class="form-group">
                                    <label >Sitaciones Adversas</label>
                                    <textarea name="sit_adv" rows="2" class="form-control">Es necesario precisar que {{ $rem->rem_apell }} {{$rem->rem_name}}, quedando señalado en el informe {{$registro->rr_ref}} detallando los siguientes puntos: {{$registro->rr_detalle}}, documento ingresado en la fecha {{$registro->rr_fec}}.</textarea>
                                </div>
                                @endif

                                {{-- conclusion --}}
                                @if ($errors->has('conclusion'))
                                <div class="form-group">
                                    <label>Clonclusiones</label>
                                    <textarea name="conclusion" rows="2" class="form-control is-invalid"></textarea>
                                </div>
                                @else 
                                <div class="form-group">
                                    <label >Clonclusiones</label>
                                    <textarea name="conclusion" rows="2" class="form-control">{{old('conclusion')}}</textarea>
                                </div>
                                @endif

                                {{-- recomendaciones --}}
                                @if ($errors->has('recomendaciones'))
                                <div class="form-group">
                                    <label>Recomendaciones</label>
                                    <textarea name="recomendaciones" rows="1" class="form-control is-invalid"></textarea>
                                </div>
                                @else 
                                <div class="form-group">
                                    <label >Recomendaciones</label>
                                    <textarea name="recomendaciones" rows="1" class="form-control">{{old('recomendaciones')}}</textarea>
                                </div>
                                @endif
                                @endif
                                @endforeach
                            </div>
                        

                            <div class="card-footer text-right">
                                    <button type="submit" class="btn btn-primary">Guardar Informe</button>
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