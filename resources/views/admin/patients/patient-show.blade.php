@extends('adminlte::page')
@section('title', 'Dashboard')

@section('content_header')
<div class="welcome data-profile-cover mb-5">
    <div class="row data-profile p-3">
        <div class="col-12 col-md-10 d-flex align-items-center align-items-md-start">
            {{-- <img class="data-profile-img" src="{{$user->profile_photo_url}}" alt="" width="100px"> --}}
            <div class="col">
                <h2 class="data-profile-name">{{$patient->name_patient}}</h2>
                <p class="welcome_text">Paciente afiliado</p>
            </div>
        </div>

        <div class="col-2 return-button">
            <a class="btn btn-success" href="{{route('admin.medics')}}" type="button">
                <i class="fas fa-arrow-left mr-2"></i>
                Volver
            </a>
        </div>
    </div>
</div>
@stop

@section('content')
<form action="{{url('admin/patient/create')}}" enctype="multipart/form-data" method="post" class="needs-validation"
    novalidate>

    {{ csrf_field() }}

    <div class="row">
        <div class="col-12 col-md-6 mb-4">
            <div class="card-form p-4">
                <h4 class="form-title mb-3">
                    <i class="far fa-user mr-2"></i>Información básica
                </h4>
                <div class="row">
                    <div class="form-group col-6">
                        <label for="idtype">Tipo de identificación</label>
                        <p>{{$idtype}}</p>
                    </div>
                    <div class="form-group col-6">
                        <label for="idnumber">N° Identificación</label>
                        <p>{{$patient->identify_patient}}</p>
                    </div>

                    <div class="form-group col-6">
                        <label for="name">Nombres</label>
                        <p>{{$patient->name_patient}}</p>
                    </div>
                    <div class="form-group col-6">
                        <label for="last">Apellidos</label>
                        <p>{{$patient->last_patient}}</p>
                    </div>

                </div>
                <div class="row mb-3">
                    <div class="form-group col-6">
                        <label for="birth">Fecha de nacimiento</label>
                        <p>{{$patient->birth_patient}}</p>
                    </div>
                    <div class="form-group col-6">
                        <label for="stratrum">Estrato</label>
                        <p>{{$patient->social_strat_patient}}</p>
                    </div>
                    <div class="form-group col-6">
                        <label for="sex">Sexo</label>
                        <p>{{$patient->genre_patient}}</p>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-12 col-md-6 mb-4">
            <div class="card-form p-4">
                <h4 class="form-title mb-3">
                    <i class="fas fa-map-marker-alt mr-2"></i>
                    Ubicación
                </h4>

                <div class="row">
                    <div class="form-group col-6">
                        <label for="department" class="form-label">Departamento</label>
                        <p>{{$department}}</p>
                    </div>
                    <div class="form-group col-6">
                        <label for="municipality" class="form-label">Municipios</label>
                        <p>{{$municipality}}</p>

                    </div>
                    <div class="form-group col-6">
                        <label for="neigh">Barrio</label>
                        <p>{{$patient->neigh_patient}}</p>

                    </div>
                    <div class="form-group col-6">
                        <label for="address">Dirección</label>
                        <p>{{$patient->home_address_patient}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12 col-md-6 mb-4">
            <div class="card-form p-4">
                <h4 class="form-title mb-3">
                    <i class="far fa-address-book mr-2"></i>
                    Información de contacto
                </h4>
                <div class="row mb-3">
                    <div class="form-group col-6">
                        <label for="email">E-mail</label>
                        <p>
                            {{$patient->home_address_patient}}
                        </p>

                    </div>
                    <div class="form-group col-6">
                        <label for="cel">Celular</label>
                        <p>{{$patient->cel_patient}}</p>
                    </div>
                    <div class="form-group col-6">
                        <label for="tel">Teléfono</label>
                        <p>{{$patient->tel_patient}}</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-6 mb-4">
            <div class="card-form p-4">
                <div class="row">
                    <h4 class="form-title mb-3">
                        <i class="far fa-list-alt mr-2"></i>
                        Descripción
                    </h4>
                    <div class="form-group col-12">
                        <p>{{$patient->desc_patient}}</p>
                    </div>
                </div>
            </div>
        </div>
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