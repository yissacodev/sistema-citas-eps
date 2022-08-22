@extends('adminlte::page')
@section('title', 'Dashboard')

@section('content_header')
<div class="container-fluid welcome">
    <div class="row pt-3 px-3 d-flex justify-content-md-between justify-content-center align-items-center">
        <div class="col-md-5 col-12 fw-bold">
            <h2 class="welcome_title">Cita {{$medicalarea->name_area}}</h2>

        </div>
        <div class="col-md-7 col-12 fw-bold ">
            <p class="instructions_list mb-2 d-sm-none">&#10003; Seleccione una sede y un médico <br>
                &#10003; Agende un día y elija un horario para registrar su cita</p>
            <p class="instructions_list m-0 d-none d-sm-block">&#10003; Para solicitar una cita debe seleccionar la sede
                confamiliar</p>
            <p class="instructions_list m-0 d-none d-sm-block">&#10003; Se cargarán los médicos de esa sede.</p>
            <p class="instructions_list m-0 d-none d-sm-block">&#10003; Usted debe seleccionar su médico preferente o
                con el que lleva un <strong>tratamiento previo</strong></p>
            <p class="instructions_list m-0 d-none d-sm-block">&#10003; Acontinuación el calendario actualizará los días
                disponibles</p>
            <p class="instructions_list mb-2 d-none d-sm-block">&#10003; Usted puede elegir un día que tenga espacios
                disponibles y asignar una cita médica en una hora especifica</p>
        </div>


    </div>
    <div class="row pt-0 px-3 pb-3 d-flex justify-content-md-evenly justify-content-center align-items-center">
        <div class="col-md-4 col-sm-6 col-12 mr-md-3 fw-bold">
            <p class="welcome_text mb-1">Seleccione Sede Confamiliar</p>
            <select type="text" name="available_branchoffices" id="available_branchoffices" class="form-control"
                data-area="{{$medicalarea->id_area}}" required>
                <option value="" selected disabled hidden>Seleccione una sede</option>
                @foreach ($branchoffices as $branchoffice)
                <option value="{{$branchoffice->id_branch}}">
                    {{$branchoffice->name_branch_office}}
                </option>
                @endforeach
            </select>
        </div>
        <div class="col-md-4 col-sm-6 col-12 mr-md-3 fw-bold">
            <p class="welcome_text mb-1">Seleccione un médico</p>
            <select type="text" name="available_medics" id="available_medics" class="form-control" required>
            </select>
        </div>
    </div>
</div>
@stop

@section('content')

<div class="row">
    <div class="col-12">
        <div class="calendar__container">
            <div class="calendar__header">
                <div class="month-name"></div>
                <div class="dir-button">
                    <div class="fas fa-angle-left back-btn"></div>
                    <div class="fas fa-circle center-btn" aria-hidden="true"></div>
                    <div class="fas fa-angle-right next-btn"></div>
                </div>
            </div>

            <div class="calendar__weekdays">
                <div class="calendar__day">
                    <span>D</span><span class="day-word d-none d-sm-inline">omingo</span>
                </div>
                <div class="calendar__day">
                    <span>L</span><span class="day-word d-none d-sm-inline">unes</span>
                </div>
                <div class="calendar__day">
                    <span>M</span><span class="day-word d-none d-sm-inline">artes</span>
                </div>
                <div class="calendar__day">
                    <span class="d-inline d-sm-none">W</span><span class="day-word d-none d-sm-inline">Miercoles</span>
                </div>
                <div class="calendar__day">
                    <span>J</span><span class="day-word d-none d-sm-inline">ueves</span>
                </div>
                <div class="calendar__day">
                    <span>V</span><span class="day-word d-none d-sm-inline">iernes</span>
                </div>
                <div class="calendar__day">
                    <span>S</span><span class="day-word d-none d-sm-inline">abado</span>
                </div>
            </div>

            <div class="calendar"></div>
        </div>

        <div class="modal fade day-schedule-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header modal-header__color">
                        <h5 class="modal-title">Espacios disponibles</h5>
                        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div id="modalBody" class="modal-body p-0 d-flex">



                        
                    </div>
                </div>
            </div>
        </div>

        <div class="newEventModal">
            <h2>New Event</h2>

            <input class="eventTitleInput" placeholder="Event Title" />

            <button class="saveButton">Save</button>
            <button class="cancelButton">Cancel</button>
        </div>

        <div class="deleteEventModal">
            <h2>Event</h2>

            <p class="eventText"></p>

            <button class="deleteButton">Delete</button>
            <button class="closeButton">Close</button>
        </div>

        <div class="modalBackDrop"></div>

    </div>
</div>




@stop


@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
<link rel="stylesheet" href="/css/style.css">
<link rel='stylesheet' href='/css/calendar.css' />
<style>
    /* 
.content-wrapper{
    background-color: var(--cardiology);
} */
</style>
@stop

@section('js')
<script src='/js/calendar.js'></script>
@stop