@extends('AdminViews\adminTemplate')

@section('titleWeb')
    Vacunas
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
                        <label for="vaccine">
                            Nombre de la vacuna
                        </label>
                        <input type="text" placeholder="Ingresa el nombre" name="vaccine">
                    </div>
                    <div class="col-3 m-0 p-2">
                        <label for="how_often">
                            Cada cuanto (meses)
                        </label>
                        <input type="number" placeholder="Cada cuanto" name="how_often">
                    </div>
                    <div class="col-3 m-0 p-2">
                        <label for="id_type_pet">
                            Tipo de mascota
                        </label>
                        <select name="id_type_pet">
                            <option value="1">Perro</option>
                            <option value="2">Gato</option>
                            <option value="3">Lagarto</option>
                            <option value="4">Equino</option>
                            <option value="5">Insecto</option>
                        </select>
                    </div>

                    <div class="col-12 m-0 p-2 d-flex flex-column">
                        <label for="description">Descripción</label>
                        <textarea name="description" cols="30" rows="10" placeholder="Ingresa la descripcion del medicamnento"></textarea>
                    </div>

                    
                </section>


                <div class="m-0 p-0 col-12 d-flex flex-row row">

                    <div class="col-3 m-0 p-2">
                        <button class="btnSmart btn-mainGreen">Crear Vacuna</button>
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