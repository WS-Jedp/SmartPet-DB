@extends('AdminViews\adminTemplate')

@section('titleWeb')
    Users
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
        
        <h2 class="m-0 p-0">Mascotas</h2>
        <hr class="m-0 mb-3 p-0">
        <p class="text-black">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo rem inventore hic illo ipsa dignissimos nemo aliquid error eveniet vero.
        </p>
        <div class="col-12 m-0 p-0 d-flex flex-column justify-content-between align-items-start row formData">
        
            <form class="col-12 m-0 p-2 d-flex flex-column justify-contetn-center align-items-start row" id="formCreateRacePet">
                
                <section class="col-12 m-0 p-0 d-flex flex-row row">

                    {{-- Raza --}}
                    <div class="col-6 m-0 p-2">
                        <label for="race">
                            Nombre de la raza
                        </label>
                        <input type="text" placeholder="Ingresa el nombre" name="race" id="id_race_pet">
                    </div>
                    <div class="col-6 m-0 p-2">
                        <label for="id_type_pet">
                            Tipo de mascota
                        </label>
                        <select name="id_type_pet" id="id_type_pet">
                            @foreach ($typesPet as $typePet)
                                <option value="{{$typePet->id_type_pet}}">{{$typePet->type}}</option>
                            @endforeach
                        </select>
                    </div>

                   
                </section>


                <div class="m-0 p-0 col-12 d-flex flex-row row">

                    <div class="col-3 m-0 p-2">
                        <button type="submit" class="btnSmart btn-mainGreen">Crear Raza</button>
                    </div>
                    <div class="col-3 p-2">
                        <a href="/pets" class="btnSmart btn-secondGreen">Regresar</a>
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
<script src="{{url('js/FormsData/petsData/petsCRUD.js')}}"></script>
@endsection