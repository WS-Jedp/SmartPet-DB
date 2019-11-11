@extends('AdminViews\adminTemplate')

@section('titleWeb')
    Medicaments
@endsection


@section('actionsAdmin')
    <article class="col-12 m-0 p-3 d-flex flex-column justify-content-start align-items-start row sectSubscriptions">
        <h2 class="m-0 p-0">Medicaments</h2>
        <hr class="m-0 mb-3 p-0">
        <p class="text-black">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo rem inventore hic illo ipsa dignissimos nemo aliquid error eveniet vero.
        </p>
        <div class="col-12 m-0 p-0 d-flex flex-column justify-content-between align-items-start row formData">
        
            <form class="col-12 m-0 p-2 d-flex flex-column justify-contetn-center align-items-start row" action="">
                
                <section class="col-12 m-0 p-0 d-flex flex-row row">

                    {{-- Nombres y Apellidos --}}
                    <div class="col-6 m-0 p-2">
                        <label for="name">
                            Nombre del medicamento
                        </label>
                        <input type="text" placeholder="Ingresa el nombre" name="name">
                    </div>
                    <div class="col-3 m-0 p-2">
                        <label for="quantity">
                            Cantidad (gr)
                        </label>
                        <input type="number" placeholder="Cantidad de la unidad" name="quantity">
                    </div>
                    <div class="col-3 m-0 p-2">
                        <label for="inventory">
                            Inventario
                        </label>
                        <input type="number" placeholder="Cantidad disponible" name="inventory">
                    </div>

                    <div class="col-12 m-0 p-2 d-flex flex-column">
                        <label for="description">Descripción</label>
                        <textarea name="description" cols="30" rows="10" placeholder="Ingresa la descripcion del medicamnento"></textarea>
                    </div>

                    
                </section>


                <div class="m-0 p-0 col-12 d-flex flex-row row">

                    <div class="col-3 m-0 p-2">
                        <button class="btnSmart btn-mainGreen">Crear Medicamento</button>
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