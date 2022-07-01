@extends('adminlte::page')
@section('title', 'Dashboard')

@section('content_header')
<div class="container-fluid welcome">
    <div class="row p-3 d-flex justify-content-center align-items-center">
        <div class="col-10 fw-bold">
            <h2 class="welcome_title">Inscripción de pacientes</h2>
            <p class="welcome_text">Formulario de inscripcion de pacientes</p>
        </div>
        <a href="{{route('admin.patients')}}" type="button" class="btn btn-success col-2">
            <i class="fas fa-arrow-left mr-2"></i>
            Regresar
        </a>
    </div>
</div>
@stop

{{-- <form action="{{$movie->id}}" class="" enctype="multipart/form-data" method="POST"> --}}
    


@section('content')
<form action="{{$patient->id_patient}}" enctype="multipart/form-data" method="POST" class="needs-validation"
    novalidate>

    {{ csrf_field() }}
    {{ method_field('PUT') }}

    <h4>Información básica</h4>

    <div class="row">
        <div class="form-group col-6">
            <label for="idtype">Tipo de identificación</label>
            <select type="text" name="idtype" id="idtype" class="form-control" value="{{$patient->idtype}}" required>
                @foreach ($idtypes as $idtype)
                <option value="{{$idtype->id_type}}">
                    {{$idtype->name_type}}
                </option>
                @endforeach
            </select>
        </div>
        <div class="form-group col-6">
            <label for="idnumber">N° Identificación</label>
            <input type="text" name="idnumber" id="idnumber" class="form-control" pattern="[0-9]*"
                value="{{$patient->identify_patient}}" required>
        </div>
    </div>

    <div class="row">
        <div class="form-group col-6">
            <label for="name">Nombres</label>
            <input type="text" name="name" id="name" class="form-control"
                pattern="^[ÁÉÍÓÚA-Z][a-záéíóú]+(\s+[ÁÉÍÓÚA-Z]?[a-záéíóú]+)*$" value="{{$patient->name_patient}}"
                required>
            <div class="valid-feedback">Campo correcto</div>
            <div class="invalid-feedback">Campo incorrecto</div>
        </div>
        <div class="form-group col-6">
            <label for="last">Apellidos</label>
            <input type="text" name="last" id="last" class="form-control"
                pattern="^[ÁÉÍÓÚA-Z][a-záéíóú]+(\s+[ÁÉÍÓÚA-Z]?[a-záéíóú]+)*$" value="{{$patient->last_patient}}"
                required>
        </div>

    </div>
    <div class="row mb-3">
        <div class="form-group col-4">
            <label for="birth">Fecha de nacimiento</label>
            <input type="date" name="birth" id="birth" class="form-control" value="{{$patient->birth_patient}}"
                required>
        </div>
        <div class="form-group col-2">
            <label for="stratrum">Estrato</label>
            <input type="number" name="stratrum" id="stratrum" class="form-control"
                value="{{$patient->social_strat_patient}}" min="0" max="6" required>
        </div>
        <div class="form-group col-2">
            <label for="sex">Sexo</label>
            <select type="text" name="sex" id="sex" class="form-control" value="{{$patient->genre_patient}}" required>
                <option value="M">Masculino</option>
                <option value="F">Femenino</option>
            </select>
        </div>
    </div>

    <h4>Ubicación</h4>

    <div class="row mb-3">
        <div class="form-group col-3">
            <label for="department" class="form-label">Departamento</label>
            <input class="form-control" list="datalistOptions" name="department" id="department"
                placeholder="Escriba una palabra" value="{{$department}}" required>

            <datalist id="datalistOptions">
                @foreach($departments as $department)
                <option value="{{$department->department_name}}">
                    @endforeach
            </datalist>
        </div>

        <div class="form-group col-3">
            <label for="municipality" class="form-label">Municipios</label>
            <input class="form-control" list="datalistOptions1" name="municipality" id="municipality"
                placeholder="Escriba una palabra" value="{{$municipality}}" required>
            <datalist id="datalistOptions1">
                @foreach($municipalities as $municipality)
                <option value="{{$municipality->municipality_name}}">
                    @endforeach
            </datalist>

        </div>
        <div class="form-group col-3">
            <label for="neigh">Barrio</label>
            <input type="text" name="neigh" id="neigh" class="form-control"
                pattern="^[ÁÉÍÓÚA-Z][a-záéíóú]+(\s+[ÁÉÍÓÚA-Z]?[a-záéíóú]+)*$" value="{{$patient->neigh_patient}}"
                required>
        </div>
        <div class="form-group col-3">
            <label for="address">Dirección</label>
            <input type="text" name="address" id="address" class="form-control"
                value="{{$patient->home_address_patient}}" required>
        </div>
    </div>

    <h4>Información de contacto</h4>
    <div class="row mb-3">
        <div class="form-group col-4">
            <label for="email">E-mail</label>
            <input type="text" name="email" id="email" class="form-control"
                pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" value="{{$patient->email_patient}}" required>
        </div>
        <div class="form-group col-4">
            <label for="cel">Celular</label>
            <input type="text" name="cel" id="cel" class="form-control" pattern="[0-9]{10}$"
                value="{{$patient->cel_patient}}" required>
        </div>
        <div class="form-group col-4">
            <label for="tel">Teléfono</label>
            <input type="text" name="tel" id="tel" class="form-control" pattern="[0-9]{7}$"
                value="{{$patient->tel_patient}}" required>
        </div>
    </div>
    <div class="row">
        <div class="form-group col-12">
            <label for="desc">Descripción</label>
            <textarea name="desc" id="desc" class="form-control" rows="3">{{$patient->desc_patient}}
            </textarea>
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



{{-- <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header modal-header__color">
                <h5 class="modal-title" id="exampleModalLongTitle">Nuevo paciente</h5>
                <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body d-flex justify-content-center">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div> --}}