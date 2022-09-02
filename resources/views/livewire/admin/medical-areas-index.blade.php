<div>
    <div class="card card-overflow-x">
        <div class="card-header">
            <input wire:model="search" class="form-control" type="text"
                placeholder="Ingrese un dato de algún área médica o especialidad">
        </div>
        @if($medicalareas->count())
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr class="table-header">
                        <th>Distintivo</th>
                        <th>Id de área</th>
                        <th>Nombre</th>
                        <th>Especialista</th>
                        <th>Descripción</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody class="table-body">
                    @foreach ($medicalareas as $medicalarea)
                    <tr class="table-row">
                        @if(!str_starts_with($medicalarea->color_area, '#'))
                            <td class="medarea-color {{$medicalarea->color_area}} table-data" data-label="Distintivo">
                        @else
                            <td class="medarea-color table-data" data-label="Distintivo" style="background-color: {{$medicalarea->color_area}}">
                        @endif


                        @if(str_starts_with($medicalarea->icon_area, '/storage'))
                            <img class="medarea-icon-png" src="{{url($medicalarea->icon_area)}}" alt="">
                        @elseif($medicalarea->icon_area !== 'fas card-icon')
                            <i class="{{$medicalarea->icon_area}}"></i>
                        @else
                            <i class="{{$medicalarea->icon_area}}">Ψ</i>
                        @endif

                            </td>
                        
                        <td data-label="Id de área" class="table-data">{{$medicalarea->id_area}}</td>
                        <td data-label="Nombre" class="table-data">{{$medicalarea->name_area}}</td>
                        <td data-label="Especialista" class="table-data">{{$medicalarea->specialist_area}}</td>
                        <td data-label="Descripción" class="table-data"><p class="medarea-desc">{{$medicalarea->desc_area}}</p></td>

                    
                        {{-- <td>
                            <a class="button-action mr-2" href="{{route('admin.patients.show',  $medicalarea->id_area)}}" title="Detalles">
                                <i class="fas fa-eye"></i>
                                <div class="bt-tooltip">Detalles</div>
                            </a>
                            <a class="button-action text-success mr-2" href="{{route('admin.patients.edit', $medicalarea->id_patient)}}" title="Editar">
                                <i class="fas fa-pencil-alt"></i>
                                <div class="bt-tooltip">Editar</div>
                            </a>
                            <form action="{{route('admin.patients.delete', $medicalarea->id_patient)}}" method="POST" style="display:inline">
                                {{ method_field('DELETE') }}
                                {{ csrf_field() }}
                                <button class="btn btn-danger button-action" type="submit"  title="Eliminar">
                                    <i class="fas fa-trash"></i>
                                    <div class="bt-tooltip">Eliminar</div>
                                </button>
                            </form>
                            
                        </td> --}}
                        <td>
                            <form action="specializations/delete/{{$medicalarea->id_area}}" method="POST" style="display:inline" class="delete_form" name="delete_form">
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

        <div class="card-footer">
            {{$medicalareas->links()}}
        </div>
        @else
        <div class="card-body">
            <strong>No hay registros</strong>
        </div>
        @endif
    </div>
</div>

@section('js')
@livewireScripts

@if (session('delete') == 'ok')
<script>
    Swal.fire(
            'Se elimino con exito!',
            'Area medica eliminada con exito.',
            'danger'
        )
</script>
@endif
<script type="text/javascript" src="/js/functions.js"></script>

@stop