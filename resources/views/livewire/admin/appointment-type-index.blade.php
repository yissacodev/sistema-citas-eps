<div>
    <div class="container-fluid welcome mb-3">
        <div class="row p-3">
            <div class="col fw-bold">
                <h2 class="welcome_title">Solicitud de citas</h2>
                <p class="welcome_text">Acontinuación seleccione una de las áreas médicas en la que desea programar una cita</p>
            </div>
            <div class="col align-self-center">
                <input wire:model="search" class="form-control" type="text"
                    placeholder="Ingrese un dato de algún área médica o especialidad">
            </div>
        </div>
    </div>
    <div class="row mb-3">
        @if($medicalareas->count())
        @foreach ($medicalareas as $medicalarea)
            <div class="col-6 col-md-3 mb-4">

                @if(!str_starts_with($medicalarea->color_area, '#'))
                    <a href="{{'appointments/register/'.$medicalarea->id_area}}" class="area-card {{$medicalarea->color_area}}">
                @else
                    <a href="{{'appointments/register/'.$medicalarea->id_area}}" class="area-card" style="background-color: {{$medicalarea->color_area}}">
                @endif

                    @if(str_starts_with($medicalarea->icon_area, '/storage'))
                        <img class="medarea-icon-png" src="{{url($medicalarea->icon_area)}}" alt="">
                        <span class="card-text">{{$medicalarea->name_area}}</span>
                    @elseif($medicalarea->icon_area !== 'fas card-icon')
                        <i class="{{$medicalarea->icon_area}}"></i>
                        <span class="card-text">{{$medicalarea->name_area}}</span>
                    @else
                        <i class="{{$medicalarea->icon_area}}">Ψ</i>
                        <span class="card-text">{{$medicalarea->name_area}}</span>
                    @endif

               
                </a>
                {{-- <a href="{{'appointments/register/'.este}}" class="area-card {{$medicalarea->color_area}}"> --}}
            </div>
        @endforeach
        @endif
    </div>
</div>





