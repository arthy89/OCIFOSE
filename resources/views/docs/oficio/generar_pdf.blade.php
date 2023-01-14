@extends('adminlte::page')

@section('title', 'Generar PDF')

@section('content_header')
    <h1>PDF</h1>
    <button class="btn btn-primary" onclick="window.print()">Imprimir</button>
    <hr>
@stop

@section('content')
{{-- <p>cramos el pdf</p> --}}
{{-- <p>{{$registro}}</p>
<br>
<p>{{$informe}}</p>
<br>
<p>{{$rem_act}}</p> --}}
<div style="font-family: 'Times New Roman', Times, serif">
    <div class="row">
        {{-- nombre del año --}}
        <div class="col-md-12" style="text-align: center">
            <p>"Decenio de la igualdad de oportunidades para mujeres y hombres" <br> "Año del Fortalecimiento de la Soberanía Nacional"</p>
        </div>
        {{-- numero OFICIO --}}
        <br>
        <br>
        <br>
        <br>
        <div class="col-md-12" style="text-align: left">
            <h5 class="ofi-title">@if(strlen($oficio_act->ofi_num) == 1)
                   <u><b> OFICIO N° 00{{$oficio_act->ofi_num}}-2023-GRP/DREP-OCI</b></u> 
                @elseif(strlen($oficio_act->ofi_num) == 2)
                    <u><b> OFICIO N° 0{{$oficio_act->ofi_num}}-2023-GRP/DREP-OCI</b></u>
                @elseif(strlen($oficio_act->ofi_num) == 3)
                    <u><b> OFICIO N° {{$oficio_act->ofi_num}}-2023-GRP/DREP-OCI</b></u>
                @endif 
            </h5>
            <br>
        </div>
        
        {{-- fecha --}}
        <div class="col-md-12">
            <p class="ofi-text-r">
                Puno, {{ $oficio_act->ofi_fec }}
            </p>
        </div>

        {{-- dirigido --}}
        <div class="col-md-12">
            <p class="ofi-text">Señor(a): <br>
                <strong>{{$rem_act[0]->rem_name}} {{$rem_act[0]->rem_apell}}</strong>
                <br>
                {{$rem_act[0]->rem_cargo}}
                <br>
                <strong>{{$rem_act[0]->rem_ofi_ent}}</strong> 
            </p>
        </div>
        

        {{-- PRESENTE --}}
        <div class="col-md-12">
            <p><strong class="ofi-text"><u>Presente.-</u></strong></p>
        </div>

        {{-- asunto --}}
        <div class="col-md-4">
            <p><strong class="ofi-text">Asunto &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</strong>
        </div>

        <div class="col-md-8">
            <p class="ofi-text-min">{{$registro->rr_asunto}}</p>
        </div>

        {{-- referencia --}}
        <div class="col-md-4">
            <p><strong class="ofi-text">Referencia :</strong>
        </div>

        <div class="col-md-8">
            <p class="ofi-text-min">INFORME DE HITO DE CONTROL N° @if(strlen($oficio_act->ofi_num) == 1)
                                00{{$oficio_act->ofi_num}}
                            @elseif(strlen($oficio_act->ofi_num) == 2)
                                0{{$oficio_act->ofi_num}}
                            @elseif(strlen($oficio_act->ofi_num) == 3)
                                {{$oficio_act->ofi_num}}
                            @endif-2022/OCI/0741-SCC</p>
        </div>
        <p class="ofi-line" >_______________________________________________________________________________________________________</p>

        <div class="col-md-12">
            <p class="ofi-text">{{$oficio_act->ofi_body}}</p>
            <p class="ofi-text">Al respecto, como resultado de la ejecución del citado servicio relacionado, ha emitido el informe <strong>INFORME DE HITO DE CONTROL N° @if(strlen($oficio_act->ofi_num) == 1)
                                00{{$oficio_act->ofi_num}}
                            @elseif(strlen($oficio_act->ofi_num) == 2)
                                0{{$oficio_act->ofi_num}}
                            @elseif(strlen($oficio_act->ofi_num) == 3)
                                {{$oficio_act->ofi_num}}
                            @endif-2022/OCI/0741-SCC</strong>   de la fecha <strong>{{$registro->rr_fec}}</strong> , con el propósito que, en su calidad de titular de la entidad evaluada, disponga las acciones necesarias para la implementación de las recomendaciones consignadas en dicho informe, respecto de las cuales se servirá informar a este Órgano de Control Institucional, quien será el encargado de efectuar el seguimiento de la adopción de tales medidas.</p>
            <p class="ofi-text">Es propicia la oportunidad para expresarle las seguridades de mi especial consideración y estima.</p>
        </div>
        


        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        
        {{-- usuario --}}        
        <div class="col-md-12">
            <p class="ofi-center">_____________________________________</p>
            <p class="ofi-center">
                {{auth()->user()->name}}
            </p>
        </div>
    </div>
</div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/oficio.css">
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    {{-- <script> console.log('Hi!'); </script> --}}
    {{-- <div class="col-md-12" style="text-align: center">
        </div> --}}
@stop