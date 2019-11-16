@extends('AdminViews\adminTemplate')

@section('titleWeb')
    Medicaments
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


        <h2 class="m-0 p-0">Medicaments</h2>
        <hr class="m-0 mb-3 p-0">
        <p class="text-black">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo rem inventore hic illo ipsa dignissimos nemo aliquid error eveniet vero.
        </p>
        <div class="col-12 m-0 p-0 d-flex flex-column justify-content-between align-items-start row formData">
        
            <form class="col-12 m-0 p-2 d-flex flex-column justify-contetn-center align-items-start row" id="formEditMedicament">
                
                <section class="col-12 m-0 p-0 d-flex flex-row row">

                    <input type="number" value="{{$medicament->id_medicament}}" hidden name="id_medicament" id="id_medicament">

                    {{-- Nombres y Apellidos --}}
                    <div class="col-6 m-0 p-2">
                        <label for="name">
                            Nombre del medicamento
                        </label>
                        <input type="text" placeholder="Ingresa el nombre" name="name" id="name" value="{{$medicament->name}}">
                    </div>
                    <div class="col-3 m-0 p-2">
                        <label for="quantity">
                            Cantidad (gr)
                        </label>
                        <input type="number" placeholder="Cantidad de la unidad" name="quantity" id="quantity" value="{{$medicament->quantity}}">
                    </div>
                    <div class="col-3 m-0 p-2">
                        <label for="inventory">
                            Inventario
                        </label>
                        <input type="number" placeholder="Cantidad disponible" name="inventory" id="inventory" value="{{$medicament->inventory}}">
                    </div>

                    <div class="col-12 m-0 p-2 d-flex flex-column">
                        <label for="description">Descripción</label>
                        <textarea name="description" id="description" cols="30" rows="10" placeholder="Ingresa la descripcion del medicamnento" class="text-black">{{$medicament->description}}</textarea>
                    </div>

                    <div class="col-4 m-0 p-2 d-flex flex-column">
                        <label for="id_type_pet">Tipo de mascota</label>
                            
                            
                        {{-- Fix this still --}}
                        @foreach($typesPet as $typePet)
                            @foreach ($typePetHasMedicaments as $typePetHasMedicament)
                                    <label for="id_type_pet" class="text-black">
                                        <input type="checkbox"  name="id_type_pet[]" value="{{$typePetHasMedicament->id_type_pet}}"> 
                                        {{$typePet->type}}
                                    </label>
                            @endforeach
                        @endforeach
                           
                            
                    </div>

                    
                </section>


                <div class="m-0 p-0 col-12 d-flex flex-row row">

                    <div class="col-3 m-0 p-2">
                        <button type="submit" class="btnSmart btn-mainGreen">Actualizar Medicamento</button>
                    </div>
                    <div class="col-3 p-2">
                        <a href="/medicaments" class="btnSmart btn-secondGreen">Regresar</a>
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
<script src="{{url('js/FormsData/medicamentsData/medicamentsData.js')}}"></script>
@endsection