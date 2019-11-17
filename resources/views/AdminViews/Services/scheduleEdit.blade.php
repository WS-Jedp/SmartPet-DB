@extends('AdminViews\adminTemplate')

@section('titleWeb')
    Schedules
@endsection


@section('actionsAdmin')
    <article class="col-12 m-0 p-3 d-flex flex-column justify-content-start align-items-start row sectSubscriptions">
          {{-- Alert --}}
            <div class="alert alert-success alert-dismissible fade show col-12 d-none" role="alert" id="alertSuccess">
                    <strong id="titleAlert">Accion completada!</strong> Accion completada con exito 
                        <button type="button" class="close"  id="closeAlert">
                            <span aria-hidden="true">&times;</span>
                    </button>
            </div>

        <h2 class="m-0 p-0">Horarios</h2>
        <hr class="m-0 mb-3 p-0">
        <p class="text-black">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo rem inventore hic illo ipsa dignissimos nemo aliquid error eveniet vero.
        </p>
        <div class="col-12 m-0 p-0 d-flex flex-column justify-content-between align-items-start row formData">
        
            <form class="col-12 m-0 p-2 d-flex flex-column justify-contetn-center align-items-start row" id="formEditTimetable">
                <input type="number" hidden name="id_timetable" id="id_timetable" value="{{$timetable->id_timetable}}">
                <section class="col-12 m-0 p-0 d-flex flex-row row">

                    {{-- Nombres y Apellidos --}}
                    <div class="col-12 m-0 p-2">
                        <label for="service">
                            Nombre del horario
                        </label>
                        <input type="text" placeholder="Ingresa el nombre del servicio" name="name" value="{{$timetable->name}}">
                    </div>


                    {{-- Hora inicio y final --}}
                    <div class="col-6 m-0 p-2">
                        <label for="time_start">
                            Hora de comienzo
                        </label>
                        <input type="time" placeholder="Ingresa la hora de inicio" name="time_start" value="{{$timetable->time_start}}">
                    </div>
                     <div class="col-6 m-0 p-2">
                        <label for="time_end">
                            Hora de cierre
                        </label>
                        <input type="time" placeholder="Ingresa la hora de cierre" name="time_end" value="{{$timetable->time_end}}">
                    </div>
                    

                      {{-- weekend --}}
                    <div class="col-6 m-0 p-2">
                        <label for="weekend">
                            Estado del servicio actual: 
                            @if($timetable->weekend == 0)
                                <strong class="text-success">Disponible</strong>
                                @elseif($timetable->weekend != 0)
                                <strong class="text-danger">No Disponible</strong>
                            @endif
                        </label>
                        <select name="weekend">
                            <option value="0">disponible</option>
                            <option value="1">no disponible</option>
                        </select>
                    </div>

                </section>


                <div class="m-0 p-0 col-12 d-flex flex-row row">

                    <div class="col-3 m-0 p-2">
                        <button type="submit" class="btnSmart btn-mainGreen">Actualizar Horario</button>
                    </div>
                    <div class="col-3 p-2">
                        <a href="/services" class="btnSmart btn-secondGreen">Regresar</a>
                    </div>
                </div>

                
                </form>
            
        </div>

        <div class="col-12 d-flex flex-row justify-content-start align-items-center row m-0 p-0">

            

        </div>


    </article>
@endsection

@section('scripts')
<script src="{{url('js/FormsData/servicesData/servicesData.js')}}"></script>
@endsection