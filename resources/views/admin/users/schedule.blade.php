@extends('adminlte::page')
@section('title', 'Dashboard')

@section('content_header')
<div class="container-fluid welcome">
    <div class="row p-3">
        <div class="col fw-bold">
            <h2 class="welcome_title">Horario</h2>
            <p class="welcome_text">Horarios disponibles para sacar una cita de tipo ...</p>
        </div>
    </div>
</div>
@stop

@section('content')
    <!-- Aqui debe generarse el calendario solo con las fechas de una sola área médica-->
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
<link rel="stylesheet" href="/css/style.css">
@stop

@section('css')
@stop


@section('js')
<script>
    console.log('Hi!'); 
</script>
@stop