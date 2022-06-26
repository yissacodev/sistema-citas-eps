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
<table class="table table-hover">
    <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Área</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellidos</th>
            <th scope="col">Doctor</th>
            <th scope="col">Consultorio</th>
            <th scope="col">Fecha</th>
            <th scope="col">Estado</th>
            <th scope="col">Modificar</th>
            <th scope="col">Cancelar</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">1</th>
            <td>General</td>
            <td>Dennise Samantha</td>
            <td>Fernandez Rodriguez</td>
            <td>Andrea Guerrro</td>
            <td>5</td>
            <td>29/07/2020</td>
            <td>Pendiente</td>
            <td><i class="fa fa-apple" aria-hidden="true"></i></td>
            <td><i class="fa fa-apple" aria-hidden="true"></i></td>
            
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>Guerrero</td>
            <td>Thornton</td>
            <td>@fat</td>
            <td>@fat</td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td>Larry</td>
            <td>the Bird</td>
            <td>@twitter</td>
            <td>@twitter</td>
            

            
        </tr>
    </tbody>
</table>

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