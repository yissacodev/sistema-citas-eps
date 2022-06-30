@extends('adminlte::page')
@section('title', 'Dashboard')

@section('content_header')
<div class="container-fluid welcome">
    <div class="row p-3 d-flex justify-content-center align-items-center">
        <div class="col-10 fw-bold">
            <h2 class="welcome_title">Especialidades o Áreas médicas</h2>
            <p class="welcome_text">En esta sección usted puede visualizar todas las especialidades médicas que tiene EPS confamiliar</p>
        </div>
        <div class="col-2 fw-bold">
            <a href="{{route('admin.specializations.register')}}" type="button" class="btn btn-success">
                <i class="fas fa-plus mr-2"></i>
                Crear Especialidad
            </a>
        </div>
    </div>
</div>
@stop

@section('content')
@livewire('admin.medical-areas-index')
@stop


@section('css')
@livewireStyles
<link rel="stylesheet" href="/css/admin_custom.css">
<link rel="stylesheet" href="/css/style.css">
@stop



@section('js')
@livewireScripts
@stop