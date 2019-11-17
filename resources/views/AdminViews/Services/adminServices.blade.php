@extends('AdminViews\adminTemplate')

@section('titleWeb')
    Services
@endsection


@section('actionsAdmin')
    <article class="col-12 m-0 p-3 d-flex flex-column justify-content-start align-items-start row sectSubscriptions">
        <h2 class="m-0 p-0">Servicios</h2>
        <hr class="m-0 mb-3 p-0">
        <p class="text-black">
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Optio sit alias facere minima neque, dolorem provident repellendus! Quaerat, rerum libero?
        </p>
        
        <div class="col-12 m-0 mb-3 p-0 d-flex flex-column justify-content-between align-items-start row tableData">
            <table class="table">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Servicio</th>
                        <th scope="col">Cantidad de Personas</th>
                        <th scope="col">Estado</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($services as $service)    
                        <tr>
                            <th>{{$service->id_service}}</th>
                            <td>{{$service->service}}</td>
                            <td>15</td>
                            <td>
                                @if($service->state == 0)
                                <strong class="text-success">Disponible</strong>
                                @else
                                <strong class="text-danger">No Disponible</strong>
                                @endif
                            </td>
                            <td class="d-flex flex-row actions row justify-content-around">
                                <div class="m-0 p-1 col-6">
                                    <a href="/services/edit/{{$service->id_service}}" class="btnSmart btn-mainBlue">Editar</a>
                                </div>
                                <div class="m-0 p-1 col-6">
                                    <button type="button" class="btnSmart btn-secondBlue" data-toggle="modal" data-target="#modalDeleteService" onclick="sendServiceId({{$service->id_service}})">
                                            Eliminar
                                    </button>
                                </div>
                            </td>
                        </tr>

                        {{-- Modal --}}
                        <div class="modal fade" id="modalDeleteService" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalCenterTitle">¿Estas seguro?</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                Estas a punto de eliminar un horario
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btnSmart btn-mainPurple" onclick="drop_service(value)" id="dropService">Eliminar</button>
                            </div>
                            </div>
                        </div>
                        </div>
                    @endforeach
                </tbody>
            </table>
            <div class="col-12 d-flex flex-row justify-content-start align-items-center m-0 p-0 row">
                <div class="col-3 m-0 p-3">
                    <a href="/services/create" class="btnSmart btn-mainGreen">Agregar servicio</a>
                </div>
            </div>
        </div>

        {{-- Schedules table --}}
        <h2 class="m-0 p-0">Horario</h2>
        <hr class="m-0 p-0 mb-3">
        <p class="text-black">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi rerum, animi asperiores nisi est officia. Quas temporibus repellendus eum harum.
        </p>
         <div class="col-12 m-0 p-0 d-flex flex-column justify-content-between align-items-start row tableData">
            <table class="table">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Hora de comienzo</th>
                        <th scope="col">Hora de cierre</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($timetables as $timetable)
                        <tr>
                            <th>{{$timetable->id_timetable}}</th>
                            <td>{{$timetable->name}}</td>
                            <td>{{$timetable->time_start}}</td>
                            <td>{{$timetable->time_end}}</td>
                            <td class="d-flex flex-row actions row justify-content-around">
                                <div class="m-0 p-0 col-4">
                                    <a href="/services/timetables/edit/{{$timetable->id_timetable}}" class="btnSmart btn-mainBlue">Editar</a>
                                </div>
                                <div class="m-0 p-0 col-4">
                                    <button type="button" class="btnSmart btn-secondBlue" data-toggle="modal" data-target="#modalDeleteTimetable" onclick="sendTimetableId({{$timetable->id_timetable}})">
                                            Eliminar
                                    </button>
                                </div>
                            </td>
                        </tr>    

                          {{-- Modal --}}
                        <div class="modal fade" id="modalDeleteTimetable" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalCenterTitle">¿Estas seguro?</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                Estas a punto de eliminar un horario
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btnSmart btn-mainPurple" onclick="drop_Timetable(value)" id="dropTimetable">Eliminar</button>
                            </div>
                            </div>
                        </div>
                        </div>

                    @endforeach
                    
                </tbody>
            </table>
            <div class="col-12 d-flex flex-row justify-content-start align-items-center m-0 p-0 row">
                <div class="col-3 m-0 p-3">
                    <a href="/services/timetables/create" class="btnSmart btn-mainGreen">Agregar Horario</a>
                </div>
                
            </div>
        </div>

        <div class="col-3 m-0 p-3">
            <a href="" class="btnSmart btn-mainBlue">Ver servicios en vivo</a>
        </div>
    </article>
@endsection

@section('scripts')
<script src="{{url('js/FormsData/servicesData/servicesData.js')}}"></script>
@endsection