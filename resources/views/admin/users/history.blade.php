@extends('adminlte::page')
@section('title', 'Dashboard')

@section('content_header')
<div class="container-fluid welcome">
    <div class="row p-3">
        <div class="col fw-bold">
            <h2 class="welcome_title">Historial de citas</h2>
            <p class="welcome_text">En esta sección se encuentran todas las citas medicas que ha silicitado el paciente en el sistema.</p>
        </div>
    </div>
</div>
@stop

@section('content')

    <div>
        <table class="table table-striped">
            <thead class="table-header">
                <tr>
                    <th scope="col">N°</th>
                    <th scope="col">Área</th>
                    <th scope="col">Sede</th>
                    <th scope="col">Dirección</th>
                    <th scope="col">Doctor</th>
                    <th scope="col">Consultorio</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Estado</th>
                </tr>
            </thead>
            <tbody class="table-body">
                @foreach ($appointments as $appointment)
                    <tr class="table-row">
                        <td data-label="N°" class="table-data">{{$appointment->id_appoint}}</td>
                        <td data-label="Área" class="table-data">{{$appointment->name_area}}</td>
                        <td data-label="Sede" class="table-data">{{$appointment->name_branch_office}}</td>
                        <td data-label="Dirección" class="table-data">{{$appointment->eps_branch_address}}</td>
                        <td data-label="Doctor" class="table-data">{{$appointment->name_medic}} {{$appointment->last_medic}}</td>
                        <td data-label="Consultorio" class="table-data">{{$appointment->num_office}}</td>
                        <td data-label="Fecha" class="table-data">{{$appointment->appoint_start_date}} {{$appointment->appoint_start_hour}}</td>
                        <td data-label="Estado" class="table-data">
                            @if ($appointment->status_appoint == 0)
                                <spam class="badge bg-danger">Cancelada</spam>
                            @elseif ($appointment->status_appoint == 2)
                                <spam class="badge bg-success">Atendida</spam>
                            @else
                                <spam class="badge bg-primary">Pendiente</spam>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
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