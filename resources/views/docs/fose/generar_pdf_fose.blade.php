@extends('adminlte::page')

@section('title', 'Generar PDF')
<style>
table, th, td {
  border:1px solid black;
}

td{
    padding: 15px;
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
        {{-- cabeza --}}
        <div class="col-md-12" style="text-align: center">
            <h4><strong>
                DIRECCION REGIONAL DE EDUCACION PUNO
                <br> ORGANO DE CONTROL INSTITUCIONAL
            </strong>
            </h4>
            <h6><strong>FORMATO DE SEGUIMIENTO DEL EXPEDIENTE (FOSE)</strong></h6>
        </div>
        {{-- numero OFICIO --}}
        <br>
        <br>
        <table style="margin-left: 170px;">
            <tr>
                <td><strong>Remitente: </strong></td>
                <td>{{$rem_act[0]->rem_name}} {{$rem_act[0]->rem_apell}}</td>
                <td><strong>Expediente: </strong></td>
                <td>{{$fose->fose_num_id}}</td>
            </tr>
            <tr>
                <td><strong>Cargo: </strong></td>
                <td>{{$rem_act[0]->rem_cargo}}</td>
                <td><strong>Fecha: </strong></td>
                <td>{{$fose->fose_fec}}</td>
            </tr>
            <tr>
                <td><strong>Entidad: </strong></td>
                <td>{{$rem_act[0]->rem_ofi_ent}}</td>
                <td><strong>Hora: </strong></td>
                <td>{{$fose->fose_hor}}</td>
            </tr>
            <tr>
                <td><strong>Documento: </strong></td>
                <td>{{$registro->rr_ref}}</td>
                <td><strong>Folios: </strong></td>
                <td>{{$registro->rr_fols}}</td>
            </tr>
            <tr>
                <td><strong>Elementos <br> adjuntos: </strong></td>
                <td>{{$registro->rr_adj}}</td>
            </tr>
        </table>

        <table style="margin-left: 170px;" class="text-center">
            <tr>
                <th width="50px">Item</th>
                <th>Acción/Conclusión</th>
                <th>Personal</th>
                <th width="100px">Detalle</th>
                <th width="100px">Fecha</th>
                <th width="100px">Firma</th>
            </tr>
            <tr>
                <td>01</td>
                <td width="190px">{{$fose->fose_acc}}</td>
                <td>{{auth()->user()->name}}</td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>02</td>
                <td width="190px"></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>03</td>
                <td width="190px"></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>04</td>
                <td width="190px"></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>05</td>
                <td width="190px"></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>06</td>
                <td width="190px"></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </table>

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