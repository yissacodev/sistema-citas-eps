@extends('adminlte::page')
@section('title', 'Dashboard')

@section('content_header')

@if(!str_starts_with($area->color_area, '#'))
<div class="{{$area->color_area}} welcome__show  data-profile-cover mb-5">
    @else
    <div class="welcome__show data-profile-cover mb-5" style="background-color: {{$area->color_area}}">
        @endif
        <div class="row data-profile p-3">
            <div class="col-12 col-md-10 d-flex align-items-center align-items-md-start">
                <img class="data-profile-img" src="{{$user->profile_photo_url;}}" alt="" width="100px">
                <div class="col">
                    <h2 class="data-profile-name">{{$medic->name_medic}}</h2>
                    <p class="welcome_text">{{$area->name_area}}</p>
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

    <div class="container-fluid">
        
            <div class="row">
                <div class="col-12 col-md-6 mb-4">
                    <div class="card-form p-4">
                        <h4 class="form-title mb-3">
                            <i class="far fa-user"></i>
                            Personal
                        </h4>


                        <div class="row">
                            <div class="form-group col-6">
                                <label for="idtype">Tipo de identificación</label>
                                <p>{{$idtype}}</p>
                            </div>
                            <div class="form-group col-6">
                                <label for="idnumber">N° Identificación</label>
                                <p>{{$medic->identify_medic}}</p>
                            </div>

                            <div class="form-group col-6">
                                <label for="name">Nombres</label>
                                <p>{{$medic->name_medic}}</p>
                            </div>
                            <div class="form-group col-6">
                                <label for="last">Apellidos</label>
                                <p>{{$medic->last_medic}}</p>
                            </div>

                        </div>
                        <div class="row mb-3">
                            <div class="form-group col-6">
                                <label for="birth">Fecha de nacimiento</label>
                                <p>{{$medic->birth_medic}}</p>
                            </div>
                            <div class="form-group col-6">
                                <label for="stratrum">Estrato</label>
                                <p>{{$medic->social_strat_medic}}</p>
                            </div>
                            <div class="form-group col-2">
                                <label for="sex">Sexo</label>
                                <p>{{$medic->genre_medic}}</p>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 mb-4">
                    <div class="card-form p-4">
                        <h4 class="form-title mb-3">
                            <i class="fas fa-briefcase"></i>
                            Sede de trabajo
                        </h4>
                        <div class="row mb-3">
                            <div class="form-group col-6">
                                <label for="office">Lugar de trabajo</label>
                                <p>
                                    {{$office->name_branch_office}}
                                </p>
                            </div>
                            <div class="form-group col-6">
                                <label for="dir">Dirección sede</label>
                                <p>{{$office->eps_branch_address}}</p>
                            </div>
                            <div class="form-group col-12">
                                <label for="doctoroffice">Consultorio</label>
                                <p>{{$doctoroffice->num_office}}</p>
                            </div>

                            
                        </div>

                        <div class="row mb-3">
                            <div class="form-group col-12">
                                <label for="sch">Horarios</label>
                                <p>{{$office->office_hours_branch}}</p>
                            </div>
                           
                        </div>
                        <div class="row mb-3">
                            <div class="form-group col-6">
                                <label for="tel">Teléfono 1</label>
                                <p>{{$office->tel_branch}}</p>
                            </div>
                            <div class="form-group col-6">
                                <label for="tel">Teléfono 2</label>
                                <p>{{$office->tel2_branch}}</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
    </div>

    <div class="row">
        <div class="col-12 col-md-6 mb-4">
            <div class="card-form p-4">
                <h4 class="form-title mb-3">
                    <i class="fas fa-map-marker-alt"></i>
                    Ubicación
                </h4>

                <div class="row">
                    <div class="form-group col-6">
                        <label for="department" class="form-label">Departamento</label>
                        <p>{{$department}}</p>
                    </div>
                    <div class="form-group col-6">
                        <label for="municipality" class="form-label">Municipio</label>
                        <p>{{$municipality}}</p>

                    </div>
                    <div class="form-group col-6">
                        <label for="neigh">Barrio</label>
                        <p>{{$medic->neigh_medic}}</p>

                    </div>
                    <div class="form-group col-6">
                        <label for="address">Dirección</label>
                        <p>{{$medic->home_address_medic}}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 mb-4">
            <div class="card-form p-4">
                <h4 class="form-title mb-3">
                    <i class="far fa-address-book"></i>
                    Contacto
                </h4>
                <div class="row mb-3">

                    <div class="form-group col-6">
                        <label for="email">E-mail</label>
                        <p>
                            {{$medic->email_medic}}

                        </p>

                    </div>
                    <div class="form-group col-6">
                        <label for="cel">Celular</label>
                        <p>{{$medic->cel_medic}}</p>
                    </div>


                    <div class="form-group col-6">
                        <label for="tel">Teléfono</label>
                        <p>{{$medic->tel_medic}}</p>
                    </div>

                </div>
            </div>
        </div>

    </div>

    <div class="row">
        <div class="col-12 col-md-6 mb-4">
            <div class="card-form p-4">
                <div class="row">
                    <h4 class="form-title mb-3">
                        <i class="far fa-list-alt"></i>
                        Descripción
                    </h4>
                    <div class="form-group col-12">
                        <p>{{$medic->desc_medic}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop

@section('content')


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