@extends('AdminViews\adminTemplate')

@section('titleWeb')
    Services
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

        <h2 class="m-0 p-0">Servicios</h2>
        <hr class="m-0 mb-3 p-0">
        <p class="text-black">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo rem inventore hic illo ipsa dignissimos nemo aliquid error eveniet vero.
        </p>
        <div class="col-12 m-0 p-0 d-flex flex-column justify-content-between align-items-start row formData">
        
            <form class="col-12 m-0 p-2 d-flex flex-column justify-contetn-center align-items-start row" id="formEditService">
                <input type="number" name="id_service" id="id_service" value="{{$service->id_service}}" hidden>
                
                <section class="col-12 m-0 p-0 d-flex flex-row row">

                    {{-- Nombres y Apellidos --}}
                    <div class="col-6 m-0 p-2">
                        <label for="service">
                            Nombre del servicio
                        </label>
                        <input type="text" placeholder="Ingresa el nombre del servicio" name="service" id="service" value="{{$service->service}}">
                    </div>
                    <div class="col-6 m-0 p-2">
                        <label for="price">
                            Precio del servicio
                        </label>
                        <input type="number" placeholder="Ingresa el precio del servicio" name="price" id="price" value="{{$service->price}}">
                    </div>

                    {{-- Description --}}
                    <div class="col-12 m-0 p-2">
                        <label for="description">
                            Descripcion del servicio
                        </label>
                        <textarea name="description" id="description" cols="30" rows="10" placeholder="Ingresa la descripcion del servicio">{{$service->description}}</textarea>
                    </div>

                      {{-- Schedule y Estado --}}
                    
                    <div class="col-6 m-0 p-2">
                        <label for="id_timetable">
                            Horario del servicio actual: <strong>{{$timetableActual->name}}</strong>
                            
                        </label>
                        <select name="id_timetable" id="id_timetable">
                            @foreach ($timetables as $timetable)
                                <option value="{{$timetable->id_timetable}}"
                                    @if($service->id_timetable == $timetable->id_timetable)
                                        selected 
                                    @endif>{{$timetable->name}}</option>         
                            @endforeach           
                        </select>
                    </div>
                    <div class="col-6 m-0 p-2">
                        <label for="state">
                            Estado del servicio actual: 
                            @if($service->state == 0)
                                <strong class="text-success">Disponible</strong>
                                @else
                                <strong class="text-danger">No Disponible</strong>
                            @endif
                        </label>
                        <select name="state" id="state">
                            <option value="0" @if($service->state == 0) selected @endif>disponible</option>
                            <option value="1" @if($service->state != 0) selected @endif>no disponible</option>
                        </select>
                    </div>

                </section>


                <div class="m-0 p-0 col-12 d-flex flex-row row">

                    <div class="col-3 m-0 p-2">
                        <button type="submit" class="btnSmart btn-mainGreen">Actualizar Servicio</button>
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