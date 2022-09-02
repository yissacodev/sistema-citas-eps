@extends('adminlte::page')
@section('title', 'Dashboard')

@section('content_header')
<div class="container-fluid welcome">
    <div class="row p-3">
        <div class="col fw-bold">
            <h2 class="welcome_title">Bienvenido {{auth()->user()->name}}</h2>
            <p class="welcome_text mb-0">Bienvenido al sistema de gestión de citas EPS Comfamiliar.</p>
            <p class="welcome_text mb-0">Como Administrador usted puede gestionar todos los usuarios del sistema.</p>
            <p class="welcome_text mb-0">Buscar el item de su preferencia</p>
            <p class="welcome_text mb-0">Solicitar una cita médica de alguna especialidad</p>
            <p class="welcome_text mb-0">Gestionar sus citas y horarios</p>
        </div>
    </div>
</div>
@stop

@section('content')
<!--Con la directiva if y for 
    Si el usuario tiene una cita, solo aparece una seccion de estas, Si el usuairo tiene dos citas
    Debe Recorrerse en un ciclo
-->

<!-- <div class="row row-cols-2 d-flex flex-column flex-md-row mb-3 cite-notify area-color__gnral">
    <div class="col-12 col-md-3 mb-1">
        <div class="cite_header">
            Proxima cita
        </div>
        <div class="cite_area">
            <span class="cite_area-text">Medicina general</span>
        </div>
    </div>
    <div class="col-12 col-md-9">
        <div class="info-header">
            Informacion
        </div>
        <div class="info-cite">
            <div class="row g-0">
                <div class="col">
                    <div class="info-field">
                        <div class="info-title">Paciente</div>
                        <div class="info-desc">Lorem Ipsum</div>
                    </div>
                    <div class="info-field">
                        <div class="info-title">Doctor</div>
                        <div class="info-desc">Lorem ipsum si amet</div>
                    </div>
                    <div class="info-field">
                        <div class="info-title">Fecha</div>
                        <div class="info-desc">Lorem ipsum si amet</div>
                    </div>
                    <div class="info-field">
                        <div class="info-title">Hora</div>
                        <div class="info-desc">Lorem ipsum si amet</div>
                    </div>
                </div>
                <div class="col">
                    <div class="info-field">
                        <div class="info-title">Consultorio</div>
                        <div class="info-desc">Lorem ipsum si amet</div>
                    </div>
                    <div class="info-field">
                        <div class="info-title">Lugar</div>
                        <div class="info-desc">Lorem ipsum si amet</div>
                    </div>
                    <div class="info-field">
                        <div class="info-title">Dirección</div>
                        <div class="info-desc">Lorem ipsum si amet</div>
                    </div>
                    <div class="info-field">
                        <div class="info-title">Teléfono</div>
                        <div class="info-desc">Lorem ipsum si amet</div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div> -->

{{-- <div class="row row-cols-2 d-flex flex-column flex-md-row mb-3 cite-notify area-color__psi">
    <div class="col-12 col-md-3 mb-1">
        <div class="cite_header">
            Cita pendiente
        </div>
        <div class="cite_area">
            <span class="cite_area-text">Psicología</span>
        </div>
    </div>
    <div class="col-12 col-md-9">
        <div class="info-header">
            Informacion
        </div>
        <div class="info-cite">
            <div class="row g-0">
                <div class="col">
                    <div class="info-field">
                        <div class="info-title">Paciente</div>
                        <div class="info-desc">Melissa Alison Rodriguez Guerrero</div>
                    </div>
                    <div class="info-field">
                        <div class="info-title">Doctor</div>
                        <div class="info-desc">Lorem ipsum si amet</div>
                    </div>
                    <div class="info-field">
                        <div class="info-title">Fecha</div>
                        <div class="info-desc">Lorem ipsum si amet</div>
                    </div>
                    <div class="info-field">
                        <div class="info-title">Hora</div>
                        <div class="info-desc">Lorem ipsum si amet</div>
                    </div>
                </div>
                <div class="col">
                    <div class="info-field">
                        <div class="info-title">Consultorio</div>
                        <div class="info-desc">Lorem ipsum si amet</div>
                    </div>
                    <div class="info-field">
                        <div class="info-title">Lugar</div>
                        <div class="info-desc">Lorem ipsum si amet</div>
                    </div>
                    <div class="info-field">
                        <div class="info-title">Dirección</div>
                        <div class="info-desc">Lorem ipsum si amet</div>
                    </div>
                    <div class="info-field">
                        <div class="info-title">Teléfono</div>
                        <div class="info-desc">Lorem ipsum si amet</div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div>

<div class="row row-cols-2 d-flex flex-column flex-md-row mb-3 cite-notify area-color__car">
    <div class="col-12 col-md-3 mb-1">
        <div class="cite_header">
            Cita pendiente
        </div>
        <div class="cite_area">
            <span class="cite_area-text">Cardiología</span>
        </div>
    </div>
    <div class="col-12 col-md-9">
        <div class="info-header">
            Informacion
        </div>
        <div class="info-cite">
            <div class="row g-0">
                <div class="col">
                    <div class="info-field">
                        <div class="info-title">Paciente</div>
                        <div class="info-desc">Melissa Alison Rodriguez Guerrero</div>
                    </div>
                    <div class="info-field">
                        <div class="info-title">Doctor</div>
                        <div class="info-desc">Lorem ipsum si amet</div>
                    </div>
                    <div class="info-field">
                        <div class="info-title">Fecha</div>
                        <div class="info-desc">Lorem ipsum si amet</div>
                    </div>
                    <div class="info-field">
                        <div class="info-title">Hora</div>
                        <div class="info-desc">Lorem ipsum si amet</div>
                    </div>
                </div>
                <div class="col">
                    <div class="info-field">
                        <div class="info-title">Consultorio</div>
                        <div class="info-desc">Lorem ipsum si amet</div>
                    </div>
                    <div class="info-field">
                        <div class="info-title">Lugar</div>
                        <div class="info-desc">Lorem ipsum si amet</div>
                    </div>
                    <div class="info-field">
                        <div class="info-title">Dirección</div>
                        <div class="info-desc">Lorem ipsum si amet</div>
                    </div>
                    <div class="info-field">
                        <div class="info-title">Teléfono</div>
                        <div class="info-desc">Lorem ipsum si amet</div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div> --}}

{{-- <div class="container-fluid welcome">
    <div class="row p-3">
        <div class="col fw-bold">
            <h2 class="welcome_title">Citas anteriores</h2>
            <p class="welcome_text">Acontinuación podra ver una lista de sus citas anteriores</p>
        </div>
    </div>
</div> --}}
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
<link rel="stylesheet" href="/css/style.css">
@stop


@section('js')
<script>
    console.log('Hi!'); 
</script>
@stop
{{-- 
<div class="row suggestion">
    <div class="col">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci, alias. Odio officiis aut, dolorem blanditiis fuga repudiandae at quidem earum exercitationem, nobis delectus. Eligendi provident dolorum eos ullam, ducimus ratione.
    </div>
</div> --}}