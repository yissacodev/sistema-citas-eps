<div>
    <div class="card card-overflow-x">
        <div class="card-header">
            <input wire:model="search" class="form-control" type="text"
                placeholder="Ingresar nombre o correo de un médico">
        </div>
        @if($medics->count())
        <div class="card-body">
            <table class="table table-striped">
                <thead>
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
                <tbody>
                    @foreach ($medics as $medic)
                    <tr>
                        <td>{{$medic->identify_medic}}</td>
                        <td>{{$medic->name_medic}}</td>
                        <td>{{$medic->last_medic}}</td>
                        <td>{{$medic->email_medic}}</td>

                    
                        {{-- <td>{{$medic->birth_medic}}</td>
                        <td>{{$medic->social_strat_medic}}</td>
                        <td>{{$medic->neigh_medic}}</td>
                        <td>{{$medic->home_address_medic}}</td>
                        <td>{{$medic->cel_medic}}</td>
                        <td>{{$medic->tel_medic}}</td>
                        <td>
                           
                        </td> --}}
                        <td>
                            {{-- <a class="btn btn-primary" href="{{route('admin.users.edit', $user)}}">Editar</a> --}}
                            <a class="button-action mr-2" href="{{route('admin.medics.show',  $medic->id_medic)}}" title="Detalles">
                                <i class="fas fa-eye"></i>
                                <div class="bt-tooltip">Detalles</div>
                            </a>
                            <a class="button-action text-success mr-2" href="{{route('admin.medics.edit', $medic->id_medic)}}" title="Editar">
                                <i class="fas fa-pencil-alt"></i>
                                <div class="bt-tooltip">Editar</div>
                            </a>
                            <form action="{{route('admin.medics.delete', $medic->id_medic)}}" method="POST" style="display:inline">
                                {{ method_field('DELETE') }}
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

        <div class="card-footer">
            {{$medics->links()}}
        </div>
        @else
        <div class="card-body">
            <strong>No hay registros</strong>
        </div>
        @endif
    </div>
</div>