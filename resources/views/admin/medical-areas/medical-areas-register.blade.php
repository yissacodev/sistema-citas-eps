@extends('adminlte::page')
@section('title', 'Dashboard')

@section('content_header')
<div class="container-fluid welcome">
    <div class="row p-3 d-flex justify-content-center align-items-center">
        <div class="col-sm-10 col-12 fw-bold">
            <h2 class="welcome_title">Inscripción de especialidades o áreas médicas</h2>
            <p class="welcome_text">Llene el siguiente formulario para crear una área médica</p>
        </div>
        <a href="{{route('admin.specializations')}}" type="button" class="btn btn-success col-4 col-sm-2">
            <i class="fas fa-arrow-left mr-2"></i>
            Regresar
        </a>
    </div>
</div>
@stop

@section('content')
<form action="{{url('admin/specializations/create')}}" enctype="multipart/form-data" method="post" class="needs-validation" novalidate>

    {{ csrf_field() }}

    <h4>Información básica</h4>

    <div class="row">
        <div class="form-group col-3">
            <label for="namespecial">Nombre de especialización</label>
            <input type="text" name="namespecial" id="namespecial" class="form-control" 
            pattern="^[ÁÉÍÓÚA-Z][a-záéíóú]+(\s+[ÁÉÍÓÚA-Z]?[a-záéíóú]+)*$" required>
        </div>
        <div class="form-group col-3">
            <label for="specialist">Especialista</label>
            <input type="text" name="specialist" id="specialist" class="form-control" 
            pattern="^[ÁÉÍÓÚA-Z][a-záéíóú]+(\s+[ÁÉÍÓÚA-Z]?[a-záéíóú]+)*$" required>
        </div>
    </div>
    <div class="row">
        <div class="form-group col-1">
            <label for="color">Color</label>
            <input type="color" name="color" id="color" class="form-control" required>
        </div>
        <div class="form-group col-5">
            <label for="icon">Icono</label>
            <input type="file" name="icon" id="icon" class="form-control" accept="image/*" required><br>
            @error('icon')
                <small class="text-danger">{{$message}}</small>
            @enderror
        </div>
    </div>
    <div class="row">
        <div class="form-group col-12">
            <label for="desc">Descripción</label>
            <textarea name="desc" id="desc" class="form-control" rows="3"></textarea>
        </div>
    </div>

    <div class="form-group text-center">
        <button class="btn btn-primary" type="submit">Submit form</button>
    </div>

</form>
@include('notify::components.notify')

@stop



@section('css')
@livewireStyles

<link rel="stylesheet" href="/css/admin_custom.css">
<link rel="stylesheet" href="/css/style.css">
@stop



@section('js')

<script type="text/javascript" src="/js/validate.js"></script>
@livewireScripts
@stop