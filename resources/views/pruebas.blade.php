@extends('adminlte::page')

@section('title', 'Inicio')

@section('content_header')
    <h1>PRUEBAS DE CONSULTAS</h1>
@stop

@section('content')
    <p>Hacemos las pruebas de las consultas</p>

    <h1><strong>Remitentes</strong></h1>

    <a href="{{ route('fose') }}" class="btn btn-primary">FOSE</a>

    <ul>
        @foreach ($remitente as $rem)
            <li><a href="{{ route('detalles', $rem->id_rem) }}">{{ $rem->rem_name }}</a></li>
        @endforeach
    </ul>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop