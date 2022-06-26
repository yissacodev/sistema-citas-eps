@extends('adminlte::page')
@section('title', 'Dashboard')

@section('content_header')
<div class="container-fluid welcome">
    <div class="row p-3">
        <div class="col fw-bold">
            <h2 class="welcome_title">Cita {{$medicalarea->name_area}}</h2>
            <p class="welcome_text">Horarios disponibles para sacar una cita de tipo ...</p>
        </div>
    </div>
</div>
@stop

@section('content')


    <div class="calendar"></div>


@stop


@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
<link rel="stylesheet" href="/css/style.css">
<link href='fullcalendar/main.css' rel='stylesheet' />
@stop

@section('js')
<script src='fullcalendar/main.js'></script>
<script src='/js/schedule.js'></script>
<script>
    console.log('Hi!'); 
</script>
@stop