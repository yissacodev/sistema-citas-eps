@extends('adminlte::page')
@section('title', 'Dashboard')

@section('content_header')
<div class="container-fluid welcome">
    <div class="row p-3">
        <div class="col fw-bold">
            <h2 class="welcome_title">Lista</h2>
            <p class="welcome_text">Lista de citas por especialidad y todas</p>
        </div>
    </div>
</div>
@stop

@section('content')

    <div>
        <table class="table table-hover">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Área</th>
                    <th scope="col">Sede</th>
                    <th scope="col">Doctor</th>
                    <th scope="col">Consultorio</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Estado</th>
                    <th scope="col">Cancelar</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($appointments as $appointment)
                    <tr>
                        <td>{{$appointment->id_appoint}}</td>
                        <td>{{$appointment->name_area}}</td>
                        <td>{{$appointment->name_branch_office}}</td>
                        <td>{{$appointment->name_medic}} {{$appointment->last_medic}}</td>
                        <td>{{$appointment->num_office}}</td>
                        <td>{{$appointment->appoint_start_date}} {{$appointment->appoint_start_hour}}</td>
                        <td>{{$appointment->status_appoint}}</td>
                        <td>
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
<script>
    console.log('Hi!'); 
</script>
@stop