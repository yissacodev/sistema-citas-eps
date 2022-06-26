@extends('adminlte::page')
@section('title', 'Dashboard')

@section('content_header')
<div class="container-fluid welcome">
    <div class="row p-3">
        <div class="col fw-bold">
            <h2 class="welcome_title">Asignación de rol</h2>
            <p class="welcome_text">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
        </div>
    </div>
</div>
@stop

@section('content')
    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
    @endif
    <div class="card">
        <div class="card-body">
            <p class="h5"></p>
            <p class="form-control">{{$user->name}}</p>
            {{-- Trabajando con laravel colective --}}

            <h2 class="h5">Listado de roles</h2>
            {!! Form::model($user, ['route' => ['admin.users.update', $user], 'method' => 'put']) !!}
                @foreach ($roles as $role)
                    <div>
                        <label>
                            {{-- Recorrer roles y listarlos junto a un ckeckbox --}}
                            {!! Form::checkbox('roles[]', $role->id, null, ['class' => 'mr-1']) !!}
                            {{$role->name}}
                        </label>
                
                    </div>
                @endforeach

                {!! Form::submit('Asignar rol', ['class' => 'btn btn-primary mt-2']) !!}
            {!! Form::close() !!}
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