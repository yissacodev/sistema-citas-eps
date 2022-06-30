<div>
    <div class="card card-overflow-x">
        <div class="card-header">
            <input wire:model="search" class="form-control" type="text"
                placeholder="Ingresar nombre o correo de un paciente">
        </div>
        @if($patients->count())
        <div class="card-body">
            <table class="table table-striped">
                <thead class="table-header">
                    <tr>
                        <th>N° id</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Email</th>
                        <th>Opciones</th>

                        {{--<th>Fecha de nacimiento</th>
                        <th>Estrato</th>
                        <th>Barrio</th>
                         <th>Direccion</th>
                        <th>Celular</th>
                        <th>Teléfono</th>
                        <th></th> --}}
                    </tr>
                </thead>
                <tbody class="table-body">
                    @foreach ($patients as $patient)
                    <tr class="table-row">
                        <td data-label="N° id" class="table-data">
                            {{$patient->identify_patient}}</td>
                        <td data-label="Nombre" class="table-data">{{$patient->name_patient}}</td>
                        <td data-label="Apellido" class="table-data">{{$patient->last_patient}}</td>
                        <td data-label="Email" class="table-data">{{$patient->email_patient}}</td>

                    
                        {{-- <td>{{$patient->birth_patient}}</td>
                        <td>{{$patient->social_strat_patient}}</td>
                        <td>{{$patient->neigh_patient}}</td>
                        <td>{{$patient->home_address_patient}}</td>
                        <td>{{$patient->cel_patient}}</td>
                        <td>{{$patient->tel_patient}}</td>
                        <td>
                           
                        </td> --}}
                        <td data-label="Opciones"class="table-data">
                            {{-- <a class="btn btn-primary" href="{{route('admin.users.edit', $user)}}">Editar</a> --}}
                            <div class="table_row_options">
                                <a class="button-action mr-2" href="{{route('admin.patients.show',  $patient->id_patient)}}" title="Detalles">
                                    <i class="fas fa-eye"></i>
                                    <div class="bt-tooltip">Detalles</div>
                                </a>
                                <a class="button-action text-success mr-2" href="{{route('admin.patients.edit', $patient->id_patient)}}" title="Editar">
                                    <i class="fas fa-pencil-alt"></i>
                                    <div class="bt-tooltip">Editar</div>
                                </a>
                                <form action="{{route('admin.patients.delete', $patient->id_patient)}}" method="POST" style="display:inline">
                                    {{ method_field('DELETE') }}
                                    {{ csrf_field() }}
                                    <button class="btn btn-danger button-action" type="submit"  title="Eliminar">
                                        <i class="fas fa-trash"></i>
                                        <div class="bt-tooltip">Eliminar</div>
                                    </button>
                                </form>
                            </div>
                            
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>



        </div>

        <div class="card-footer">
            {{$patients->links()}}
        </div>
        @else
        <div class="card-body">
            <strong>No hay registros</strong>
        </div>
        @endif
    </div>
</div>