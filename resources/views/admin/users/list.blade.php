@extends('adminlte::page')
@section('title', 'Dashboard')

@section('content_header')
<div class="container-fluid welcome">
    <div class="row p-3">
        <div class="col fw-bold">
            <h2 class="welcome_title">Lista</h2>
            <p class="welcome_text">Lista de citas por especialidad y todas</p>
        </div>
    </div>
</div>
@stop

@section('content')

    @livewire ('admin.appointment-cancel-index')

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