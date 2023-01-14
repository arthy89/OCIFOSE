@extends('adminlte::page')

@section('title', 'Generar PDF')
<style>
    .inf{
    font-family: 'Times New Roman', Times, serif;
}
.inf-center{
    text-align: center;
}

.inf-title{
    text-align: left;
    font-weight: bold;
    margin-left: 60px;
}
.inf-title-sub {
    text-align: left;
    font-weight: bold;
    margin-left: 100px;
}

.inf-text {
    text-align: justify;
    margin-left: 100px;
    margin-right: 60px;
}

.inf-text-min {
    text-align: justify;
    margin-left: 100px;
    margin-right: 530px;
}

.inf-text-sub {
    text-align: justify;
    margin-left: 130px;
    margin-right: 60px;
}
</style>
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
        {{-- numero informe --}}
        <div class="col-md-12" style="text-align: center">
            <h2>@if(strlen($informe->inf_num) == 1)
                   <u><b> INFORME DE HITO DE CONTROL N° 00{{$informe->inf_num}}-2023/OCI/0741-SCC</b></u> 
                @elseif(strlen($informe->inf_num) == 2)
                    <u><b> INFORME DE HITO DE CONTROL N° 0{{$informe->inf_num}}-2023/OCI/0741-SCC</b></u>
                @elseif(strlen($informe->inf_num) == 3)
                    <u><b> INFORME DE HITO DE CONTROL N° {{$informe->inf_num}}-2023/OCI/0741-SCC</b></u>
                @endif 
            </h2>
            <br>
        </div>
        {{-- titulo informe --}}
        <div class="col-md-12" style="text-align: center">
            <h2><strong>"{{$informe->inf_name}}"</strong></h2>
        </div>
        {{-- i. origen --}}
        <div class="col-md-12">
            <h5 class="inf-title">I.&nbsp&nbsp&nbsp&nbsp&nbspORIGEN</h5>
            <p class="inf-text">{{$informe->inf_ori}}</p>
        </div>
        {{-- ii. objetivos --}}
        <div class="col-md-12">
            <h5 class="inf-title">II.&nbsp&nbsp&nbsp&nbspOBJETIVOS</h5>
            <h5 class="inf-title-sub">2.1 Objetivo General</h5>
            <p class="inf-text-sub">{{$informe->inf_obj_g}}</p>
            <h5 class="inf-title-sub">2.1 Objetivo Específico</h5>
            <p class="inf-text-sub">{{$informe->inf_obj_e}}</p>
        </div>
        {{-- iii. alcance --}}
        <div class="col-md-12">
            <h5 class="inf-title">III.&nbsp&nbsp&nbspALCANCE</h5>
            <p class="inf-text">{{$informe->inf_alc}}</p>
        </div>
        {{-- iv. situaciones adversas --}}
        <div class="col-md-12">
            <h5 class="inf-title">IV.&nbsp&nbsp&nbspSITUACIONES ADVERSAS</h5>
            <p class="inf-text">{{$informe->inf_sit_adv}}</p>
        </div>
        {{-- v. conclusion --}}
        <div class="col-md-12">
            <h5 class="inf-title">V.&nbsp&nbsp&nbsp&nbspCONCLUSIÓN</h5>
            <p class="inf-text">{{$informe->inf_cncl}}</p>
        </div>
        {{-- vi. recomendaciones --}}
        <div class="col-md-12">
            <h5 class="inf-title">VI.&nbsp&nbsp&nbspRECOMENDACIONES</h5>
            <p class="inf-text">{{$informe->inf_rec}}</p>
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
        {{-- usuario --}}        
        <div class="col-md-12">
            <p class="inf-center">_____________________________________</p>
            <p class="inf-center">
                {{auth()->user()->name}}
            </p>
        </div>
    </div>
</div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/informe.css">
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    {{-- <script> console.log('Hi!'); </script> --}}
    {{-- <div class="col-md-12" style="text-align: center">
        </div> --}}
@stop