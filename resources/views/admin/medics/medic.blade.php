@extends('adminlte::page')
@section('title', 'Dashboard')

@section('content_header')
<div class="container-fluid welcome">
    <div class="row p-3 d-flex justify-content-center align-items-center">
        <div class="col-md-10 col-12 fw-bold">
            <h2 class="welcome_title">Medicos de EPS Confamiliar</h2>
            <p class="welcome_text m-0">En esta sección se muestra una lista de datos todos los médicos</p>
            <p class="welcome_text m-0">Usted puede buscar médico digitando su cédula, nombré, apellido o cualquier dato
            </p>
            <p class="welcome_text">Gestione cada item con las opciones de la columna de <strong>Opciones</strong></p>
        </div>
        <button type="button" class="btn btn-success col-md-2 col-4 btn_add" data-toggle="modal"
            data-target=".bd-example-modal-lg">
            <i class="fas fa-plus mr-2"></i>
            Crear Médico
        </button>

        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header modal-header__color">
                        <h5 class="modal-title">Crear un médico</h5>
                        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{url('admin/medic/create')}}" enctype="multipart/form-data" method="post"
                        class="needs-validation p-3 p-md-3" id="medic-form" name="medic-form" novalidate>

                        {{ csrf_field() }}

                        <div class="container-fluid d-flex flex-column justify-content-center">
                            <!--75-->
                            <h4>Información básica</h4>
                            <div class="row flex-sm-row flex-column">
                                <div class="form-group col-sm-6 col-12">
                                    <label for="idtype">Tipo de identificación</label>
                                    <select type="text" name="idtype" id="idtype" class="form-control" required>
                                        @foreach ($idtypes as $idtype)
                                        <option value="{{$idtype->id_type}}">
                                            {{$idtype->name_type}}
                                        </option>
                                        @endforeach
                                    </select>
                                    <div class="valid-feedback">Campo correcto</div>
                                    <div class="invalid-feedback">Campo incorrecto</div>
                                </div>
                                <div class="form-group col-sm-6 col-12">
                                    <label for="idnumber">N° Identificación</label>
                                    <input type="text" name="idnumber" id="idnumber" class="form-control"
                                        pattern="[0-9]*" placeholder="Ej. 222222222" required>
                                    <div class="valid-feedback">Campo correcto</div>
                                    <div class="invalid-feedback">Campo incorrecto</div>
                                </div>
                            </div>

                            <div class="row flex-sm-row flex-column">
                                <div class="form-group col-sm-6 col-12">
                                    <label for="name">Nombres</label>
                                    <input type="text" name="name" id="name" class="form-control"
                                        pattern="^[ÁÉÍÓÚA-Z][a-záéíóú]+(\s+[ÁÉÍÓÚA-Z]?[a-záéíóú]+)*$"
                                        placeholder="Ej. Lorem Ipsum" required>
                                    <div class="valid-feedback">Campo correcto</div>
                                    <div class="invalid-feedback">Campo incorrecto</div>
                                </div>
                                <div class="form-group col-sm-6 col-12">
                                    <label for="last">Apellidos</label>
                                    <input type="text" name="last" id="last" class="form-control"
                                        pattern="^[ÁÉÍÓÚA-Z][a-záéíóú]+(\s+[ÁÉÍÓÚA-Z]?[a-záéíóú]+)*$"
                                        placeholder="Ej. Sit Amet" required>
                                    <div class="valid-feedback">Campo correcto</div>
                                    <div class="invalid-feedback">Campo incorrecto</div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="form-group col-md-4 col-sm-4 col-12">
                                    <label for="birth">Fecha de nacimiento</label>
                                    <input type="date" name="birth" id="birth" class="form-control" min="1900-01-01"
                                        max="2022-07-01" required>
                                    <div class="valid-feedback">Campo correcto</div>
                                    <div class="invalid-feedback">Campo incorrecto</div>
                                </div>
                                <div class="form-group col-md-3 col-sm-4 col-12">
                                    <label for="stratrum">Estrato</label>
                                    <input type="number" min="0" max="6" name="stratrum" id="stratrum"
                                        class="form-control" pattern="[0-6]" placeholder="Ej. 2" required>
                                </div>
                                <div class="form-group col-md-3 col-sm-4 col-12">
                                    <label for="sex">Sexo</label>
                                    <select type="text" name="sex" id="sex" class="form-control" required>
                                        <option value="" selected disabled hidden>Seleccione una opción</option>
                                        <option value="M">Masculino</option>
                                        <option value="F">Femenino</option>
                                    </select>
                                    <div class="valid-feedback">Campo correcto</div>
                                    <div class="invalid-feedback">Campo incorrecto</div>
                                </div>
                            </div>

                            <h4>Ubicación</h4>

                            <div class="row mb-3">
                                <div class="form-group col-md-3 col-sm-6 col-12">
                                    <label for="department" class="form-label">Departamento</label>
                                    <select class="form-control"  name="department" id="department" placeholder="Escriba una palabra" required>   
                                        <option value="" selected disabled hidden>Seleccione una opción</option>
                                        @foreach($departments as $department)
                                        <option value="{{$department->id_department}}">
                                            {{$department->department_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-3 col-sm-6 col-12">
                                    <label for="municipality" class="form-label">Municipios</label>
                                    <select class="form-control" name="municipality" id="municipality" placeholder="Escriba una palabra" required>
                                        <option value="" selected disabled hidden>Seleccione una opción</option>
                                    </select>
                        
                                </div>
                                <div class="form-group col-md-3 col-sm-6 col-12">
                                    <label for="neigh">Barrio</label>
                                    <input type="text" name="neigh" id="neigh" class="form-control"
                                        pattern="^[ÁÉÍÓÚA-Z][a-záéíóú]+(\s+[ÁÉÍÓÚA-Z]?[a-záéíóú]+)*$"
                                        placeholder="Ej. Greda Roja" required>
                                    <div class="valid-feedback">Campo correcto</div>
                                    <div class="invalid-feedback">Campo incorrecto</div>
                                </div>
                                <div class="form-group col-md-3 col-sm-6 col-12">
                                    <label for="address">Dirección</label>
                                    <input type="text" name="address" id="address" class="form-control"
                                        placeholder="Ej. Calle 23 N° 3-33" required>
                                    <div class="valid-feedback">Campo correcto</div>
                                    <div class="invalid-feedback">Campo incorrecto</div>
                                </div>
                            </div>

                            <h4>Información de contacto</h4>
                            <div class="row mb-3">
                                <div class="form-group col-12 col-sm-4 col-md-3">
                                    <label for="email">E-mail</label>
                                    <input type="text" name="email" id="email" class="form-control"
                                        pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"
                                        placeholder="Ej. lorem@mail.com" required>
                                    <div class="valid-feedback">Campo correcto</div>
                                    <div class="invalid-feedback">Campo incorrecto</div>
                                </div>
                                <div class="form-group col-12 col-sm-4 col-md-3">
                                    <label for="cel">Celular</label>
                                    <input type="text" name="cel" id="cel" class="form-control" pattern="[0-9]{10}$"
                                        placeholder="Ej. 333333333" required>
                                    <div class="valid-feedback">Campo correcto</div>
                                    <div class="invalid-feedback">Campo incorrecto</div>
                                </div>
                                <div class="form-group col-12 col-sm-4 col-md-3">
                                    <label for="tel">Teléfono</label>
                                    <input type="text" name="tel" id="tel" class="form-control" pattern="[0-9]{7}$"
                                        placeholder="7777777" required>
                                    <div class="valid-feedback">Campo correcto</div>
                                    <div class="invalid-feedback">Campo incorrecto</div>
                                </div>
                            </div>

                            <h2>Asignación de especialización</h2>
                            <div class="row">
                                <div class="form-group col-6 col-md-4">
                                    <label for="desc">Área médica</label>
                                    <select type="text" name="area" id="area" class="form-control" required>
                                        <option value="" selected disabled hidden>Seleccione una opción</option>
                                        @foreach ($medicalareas as $medicalarea)
                                        <option value="{{$medicalarea->id_area}}">{{$medicalarea->name_area}}</option>
                                        @endforeach
                                    </select>
                                    <div class="valid-feedback">Campo correcto</div>
                                    <div class="invalid-feedback">Campo incorrecto</div>
                                </div>
                                <div class="form-group col-6 col-md-4">
                                    <label for="desc">Sede de Comfamiliar</label>
                                    <select type="text" name="eps_doctor_office" id="eps_doctor_office" class="form-control" required>
                                        <option value="" selected disabled hidden>Seleccione una opción</option>
                                    </select>
                                    <div class="valid-feedback">Campo correcto</div>
                                    <div class="invalid-feedback">Campo incorrecto</div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-12">
                                    <label for="desc">Descripción</label>
                                    <textarea name="desc" id="desc" class="form-control" rows="3"></textarea>
                                </div>
                            </div>

                            
                        

                            <div class="form-group text-center">
                                <button class="btn btn-primary" id="btn_enabled" type="submit">Confirmar</button>
                            </div>
                        </div>

                    </form>

                </div>
            </div>
        </div>

    </div>
</div>
@stop

@section('content')
{{-- Renderizar una vista dentro de otra usando livewire --}}
@livewire('admin.medics-index')
@stop


@section('css')
@livewireStyles
<link rel="stylesheet" href="/css/admin_custom.css">
<link rel="stylesheet" href="/css/style.css">
@stop



@section('js')
@livewireScripts

@if (session('add') == 'ok')
<script>
    Swal.fire(
            'Registro exitoso!',
            'El médico ha sido registrado de la base de datos.',
            'success'
        )
</script>
@endif
<script type="text/javascript" src="/js/functions.js"></script>

@stop