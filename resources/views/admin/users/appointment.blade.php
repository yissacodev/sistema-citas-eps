@extends('adminlte::page')
@section('title', 'Dashboard')

@section('content_header')
<div class="container-fluid welcome">
    <div class="row p-3">
        <div class="col fw-bold">
            <h2 class="welcome_title">Solicitud de citas</h2>
            <p class="welcome_text">Acontinuación seleccione una de las áreas médicas en la que desea programar una cita</p>
        </div>
    </div>
</div>
@stop

@section('content')
 
    <div class="row mb-3">
        <div class="col-6 col-md-3 mb-4">
            <a href="{{'appointments/schedule/'.$este}}" class="area-card area-color__gnral">
                <i class="fas fa-clinic-medical card-icon"></i>
                <span class="card-text">General</span>
            </a>
            
        </div>
        <div class="col-6 col-md-3 mb-4">
            <div>
                <a href="#" class="area-card area-color__odo">
                    <i class="fas fa-tooth card-icon"></i>
                    <span class="card-text">Odontologíaa</span>
                </a>
                {{-- <div class="card-desc">
                    lorem ipsum
                </div> --}}
            </div>
        </div>
        <div class="col-6 col-md-3 mb-4">
            <a href="#" class="area-card area-color__car">
                <i class="fas fa-heartbeat card-icon"></i>
                <span class="card-text">Cardiología</span>
            </a>
        </div>
        <div class="col-6 col-md-3 mb-4">
            <a href="#" class="area-card area-color__psi">
                <i class="fas card-icon">Ψ</i>
                <span class="card-text">Psicología</span>
            </a>
        </div>
        <div class="col-6 col-md-3 mb-4">
            <a href="#" class="area-card area-color__psi">
                <i class="fas card-icon">Ψ</i>
                <span class="card-text">Psicología</span>
            </a>
        </div>
    
    </div>
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