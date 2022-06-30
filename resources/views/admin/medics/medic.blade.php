@extends('adminlte::page')
@section('title', 'Dashboard')

@section('content_header')
<div class="container-fluid welcome">
    <div class="row p-3 d-flex justify-content-center align-items-center">
        <div class="col-10 fw-bold">
            <h2 class="welcome_title">Medicos de EPS Confamiliar</h2>
            <p class="welcome_text m-0">En esta sección se muestra una lista de datos todos los médicos</p>
            <p class="welcome_text m-0">Usted puede buscar médico digitando su cédula, nombré, apellido o cualquier dato</p>
            <p class="welcome_text">Gestione cada item con las opciones de la columna de <strong>Opciones</strong></p>
        </div>
        <a href="{{route('admin.medics.register')}}" type="button" class="btn btn-success">
            <i class="fas fa-plus mr-2"></i>
            Crear Médico
        </a>
    </div>
</div>
@stop

@section('content')
{{-- Renderizar una vista dentro de otra usando livewire --}}
@livewire('admin.medics-index')
@stop


@section('css')
@livewireStyles
<link rel="stylesheet" href="/css/admin_custom.css">
<link rel="stylesheet" href="/css/style.css">
@stop



@section('js')
@livewireScripts
@stop