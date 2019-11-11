@extends('AdminViews\adminTemplate')

@section('titleWeb')
    Subscriptions
@endsection

@section('actionsAdmin')
    <article class="col-12 m-0 p-3 d-flex flex-column justify-content-start align-items-start row sectSubscriptions">
        <h2 class="m-0 p-0">Subscripciones</h2>
        <hr class="m-0 mb-3 p-0">
        <p class="text-black">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit voluptatibus laborum placeat dolorem odio commodi unde et consequuntur ullam quae.
        </p>
        
        <div class="col-12 m-0 p-0 d-flex flex-column justify-content-between align-items-start row tableData">
            <table class="table">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Subscripcion</th>
                        <th scope="col">Precio</th>
                        <th scope="col">Personas suscritas</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>1</th>
                        <td>SmartPet Gold</td>
                        <td>Disponible</td>
                        <td>85</td>
                        <td class="d-flex flex-row actions row justify-content-around">
                            <div class="m-0 p-0 col-4">
                                <a href="" class="btnSmart btn-mainPurple">Editar</a>
                            </div>
                            <div class="m-0 p-0 col-4">
                                <a href="" class="btnSmart btn-secondPurple">Eliminar</a>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
            
        </div>

        <div class="col-12 d-flex flex-row justify-content-start align-items-center row m-0 p-0">

            <div class="col-3 p-2">
                <button class="btnSmart btn-mainGreen">Crear Subscripcion</button>
            </div>
            <div class="col-3 p-2">
                <button class="btnSmart btn-secondGreen">Ver Todas</button>
            </div>

        </div>
        

    </article>
@endsection