@extends('adminlte::page')
@section('title', 'Dashboard')

@section('content_header')
<div class="container-fluid welcome">
    <div class="row p-3">
        <div class="col fw-bold">
            <h2 class="welcome_title">Cancelación de citas</h2>
            <p class="welcome_text">En esta sección el paciente puede cancelar las citas pendientes.</p>
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
                    <th scope="col">Doctor</th>
                    <th scope="col">Consultorio</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Estado</th>
                    <th scope="col">Cancelar</th>
                </tr>
            </thead>
            <tbody class="table-body">
                @foreach ($appointments as $appointment)
                    <tr class="table-row">
                        <td data-label="N°" class="table-data">{{$appointment->id_appoint}}</td>
                        <td data-label="Área" class="table-data">{{$appointment->name_area}}</td>
                        <td data-label="Sede" class="table-data">{{$appointment->name_branch_office}}</td>
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
                        <td data-label="Cancelar" class="table-data">
                            <form action="delete/{{$appointment->id_appoint}}" method="POST" style="display:inline" class="delete_form" name="delete_form">
                                {{ method_field('PUT') }}
                                {{ csrf_field() }}
                                <button class="btn btn-danger button-action" type="submit"  title="Eliminar">
                                    <i class="fas fa-trash"></i>
                                    <div class="bt-tooltip">Eliminar</div>
                                </button>
                            </form>
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
    @if (session('delete') == 'ok')
        <script>
            Swal.fire(
                'Eliminado!',
                'Se ha eliminado tu cita medica.',
                'success'
            )
        </script>
    @endif
    <script src="/js/functions.js"></script>
@endsection


@section('js')
<script>
    console.log('Hi!'); 
</script>
@stop