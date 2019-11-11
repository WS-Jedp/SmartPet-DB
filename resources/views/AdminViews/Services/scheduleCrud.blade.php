@extends('AdminViews\adminTemplate')

@section('titleWeb')
    Schedules
@endsection


@section('actionsAdmin')
    <article class="col-12 m-0 p-3 d-flex flex-column justify-content-start align-items-start row sectSubscriptions">
        <h2 class="m-0 p-0">Horarios</h2>
        <hr class="m-0 mb-3 p-0">
        <p class="text-black">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo rem inventore hic illo ipsa dignissimos nemo aliquid error eveniet vero.
        </p>
        <div class="col-12 m-0 p-0 d-flex flex-column justify-content-between align-items-start row formData">
        
            <form class="col-12 m-0 p-2 d-flex flex-column justify-contetn-center align-items-start row" action="">
                
                <section class="col-12 m-0 p-0 d-flex flex-row row">

                    {{-- Nombres y Apellidos --}}
                    <div class="col-12 m-0 p-2">
                        <label for="service">
                            Nombre del horario
                        </label>
                        <input type="text" placeholder="Ingresa el nombre del servicio" name="service">
                    </div>


                    {{-- Hora inicio y final --}}
                    <div class="col-6 m-0 p-2">
                        <label for="time_start">
                            Precio del servicio
                        </label>
                        <input type="time" placeholder="Ingresa la hora de inicio" name="time_start">
                    </div>
                     <div class="col-6 m-0 p-2">
                        <label for="time_end">
                            Precio del servicio
                        </label>
                        <input type="time" placeholder="Ingresa la hora de cierre" name="time_end">
                    </div>
                    

                      {{-- weekend --}}
                    <div class="col-6 m-0 p-2">
                        <label for="state">
                            Estado del servicio
                        </label>
                        <select name="state">
                            <option value="true">disponible</option>
                            <option value="false">no disponible</option>
                        </select>
                    </div>

                </section>


                <div class="m-0 p-0 col-12 d-flex flex-row row">

                    <div class="col-3 m-0 p-2">
                        <button class="btnSmart btn-mainGreen">Crear Servicio</button>
                    </div>
                    <div class="col-3 p-2">
                        <button class="btnSmart btn-secondGreen">Regresar</button>
                    </div>
                </div>

                
                </form>
            
        </div>

        <div class="col-12 d-flex flex-row justify-content-start align-items-center row m-0 p-0">

            

        </div>


    </article>
@endsection