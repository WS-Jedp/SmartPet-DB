@extends('AdminViews\adminTemplate')

@section('titleWeb')
    Medicaments
@endsection


@section('actionsAdmin')
    <article class="col-12 m-0 p-3 d-flex flex-column justify-content-start align-items-start row sectSubscriptions">
        <h2 class="m-0 p-0">Medicamentos</h2>
        <hr class="m-0 mb-3 p-0">
        <p class="text-black">
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repellendus a possimus blanditiis aliquid perferendis harum alias molestiae amet itaque officiis.
        </p>
        
        <div class="col-10 m-0 mb-3 p-0 d-flex flex-column justify-content-between align-items-start row tableData">
            <table class="table">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre</th>                        
                        <th scope="col">Inventario</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>1</th>
                        <td>Acetaminofen</td>        
                        <td>85</td>
                        <td class="d-flex flex-row actions row justify-content-around">
                            <div class="m-0 p-1 col-6">
                                <a href="" class="btnSmart btn-mainBlue">Editar</a>
                            </div>
                            <div class="m-0 p-1 col-6">
                                <a href="" class="btnSmart btn-secondBlue">Eliminar</a>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="col-12 d-flex flex-row justify-content-start align-items-center m-0 p-0 row">
                <div class="col-3 m-0 p-3">
                    <a href="" class="btnSmart btn-mainGreen">Agregar</a>
                </div>
            </div>
        </div>

    </article>
@endsection