@extends('adminlte::page')

@section('title', 'Inicio')

@section('content_header')
@stop

@section('content')
<div class="content">
    <div class="container">
        <div class="text-center">
            <img src="https://www.yohagomiparte.gob.pe/assets/template/images/La_Contraloria.png" width="300" height="160">
        </div>
        <div class="card">
            <div class="card-body">
                <h1><strong>La Contraloría General de la República</strong></h1>
                <p>Supervisamos y verificamos la correcta aplicación de las políticas públicas y el uso de los recursos y bienes del Estado, a través de nuestras gerencias regionales de control, los Órganos de Control Institucional (OCI) y las Sociedades de Auditorías (SOA).</p>
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