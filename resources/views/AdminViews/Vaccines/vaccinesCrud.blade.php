@extends('AdminViews\adminTemplate')

@section('titleWeb')
    Vacunas
@endsection


@section('actionsAdmin')
    <article class="col-12 m-0 p-3 d-flex flex-column justify-content-start align-items-start row sectSubscriptions">

         <div class="alert alert-success alert-dismissible fade show col-12 d-none" role="alert" id="alertSuccess">
                    <strong id="titleAlert">Accion completada!</strong> Accion completada con exito 
                        <button type="button" class="close"  id="closeAlert">
                            <span aria-hidden="true">&times;</span>
                    </button>
        </div>

        <h2 class="m-0 p-0">Vacunas</h2>
        <hr class="m-0 mb-3 p-0">
        <p class="text-black">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo rem inventore hic illo ipsa dignissimos nemo aliquid error eveniet vero.
        </p>
        <div class="col-12 m-0 p-0 d-flex flex-column justify-content-between align-items-start row formData">
        
            <form class="col-12 m-0 p-2 d-flex flex-column justify-contetn-center align-items-start row" id="formCreateVaccine">
                
                <section class="col-12 m-0 p-0 d-flex flex-row row">

                    {{-- Nombres y Apellidos --}}
                    <div class="col-6 m-0 p-2">
                        <label for="vaccine">
                            Nombre de la vacuna
                        </label>
                        <input type="text" placeholder="Ingresa el nombre" name="vaccine" id="vaccine">
                    </div>
                    <div class="col-6 m-0 p-2">
                        <label for="how_often">
                            Cada cuanto (meses)
                        </label>
                        <input type="number" placeholder="Cada cuanto" name="how_often" id="how_often">
                    </div>
                    

                    <div class="col-12 m-0 p-2 d-flex flex-column">
                        <label for="description">Descripción</label>
                        <textarea name="description" id="description" cols="30" rows="10" placeholder="Ingresa la descripcion del medicamnento"></textarea>
                    </div>

                    <div class="col-12 m-0 p-2">
                        @foreach ($typesPet as $typePet)
                            <label for="id_type_pet">
                                <input type="checkbox" name="id_type_pet[]" value="{{$typePet->id_type_pet}}">
                                {{$typePet->type}}
                            </label>
                        @endforeach
                        
                    </div>

                    
                </section>


                <div class="m-0 p-0 col-12 d-flex flex-row row">

                    <div class="col-3 m-0 p-2">
                        <button type="submit" class="btnSmart btn-mainGreen">Crear Vacuna</button>
                    </div>
                    <div class="col-3 p-2">
                        <a href="/vaccines" class="btnSmart btn-secondGreen">Regresar</a>
                    </div>
                </div>

                
                </form>
            
        </div>

        <div class="col-12 d-flex flex-row justify-content-start align-items-center row m-0 p-0">

            

        </div>


    </article>
@endsection

@section('scripts')
@parent
    <script src="{{url('js/FormsData/vaccinesData/vaccinesData.js')}}"></script>
@endsection