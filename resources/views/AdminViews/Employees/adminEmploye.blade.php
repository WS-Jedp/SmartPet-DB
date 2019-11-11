@extends('AdminViews\adminTemplate')

@section('titleWeb')
    Users
@endsection


@section('actionsAdmin')
    <article class="col-12 m-0 p-3 d-flex flex-column justify-content-start align-items-start row sectSubscriptions">
        <h2 class="m-0 p-0">Empleados</h2>
        <hr class="m-0 mb-3 p-0">
        <p class="text-black">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo rem inventore hic illo ipsa dignissimos nemo aliquid error eveniet vero.
        </p>
        <div class="col-10 m-0 mb-3 p-0 d-flex flex-column justify-content-between align-items-start row tableData">
            <table class="table">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Tipo</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Calificacion</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>1</th>
                        <td>Medico</td>
                        <td>85</td>
                        <td>5 estrellas</td>
                        <td class="d-flex flex-row actions row justify-content-around">
                            <div class="m-0 p-0 col-4">
                                <a href="" class="btnSmart btn-mainBlue">Editar</a>
                            </div>
                            <div class="m-0 p-0 col-4">
                                <a href="" class="btnSmart btn-secondBlue">Eliminar</a>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="col-12 d-flex flex-row justify-content-start align-items-center m-0 p-0 row">
                <div class="col-3 m-0 p-3">
                    <a href="" class="btnSmart btn-mainGreen">Nuevo de Empleado</a>
                </div>
                <div class="col-3 m-0 p-3 d-flex flex-row">
                    <a href="" class="btnSmart btn-secondGreen">Ver todos</a>
                </div>
            </div>
        </div>

        {{-- Crear tipos de usuarios --}}
            <h2 class="m-0 p-0">Tipos de empleados</h2>
            <hr class="m-0 mb-3 p-0">
            <p class="text-black">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi provident sapiente enim nemo cum aliquid sequi perspiciatis repellendus blanditiis laudantium?
            </p>
        <div class="col-10 m-0 p-0 d-flex flex-column justify-content-between align-items-start row tableData">
            <table class="table">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Tipo</th>
                        <th scope="col">Salario Minimo</th>
                        <th scope="col">Duración</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>1</th>
                        <td>Limpiador</td>
                        <td>1.500.000</td>
                        <td>3 meses</td>
                        <td class="d-flex flex-row actions row justify-content-around">
                            <div class="m-0 p-0 col-4">
                                <a href="" class="btnSmart btn-mainBlue">Editar</a>
                            </div>
                            <div class="m-0 p-0 col-4">
                                <a href="" class="btnSmart btn-secondBlue">Eliminar</a>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="col-12 d-flex flex-row justify-content-start align-items-center m-0 p-0 row">
                <div class="col-3 m-0 p-3">
                    <a href="" class="btnSmart btn-mainGreen">Nuevo Tipo</a>
                </div>
                <div class="col-3 m-0 p-3 d-flex flex-row">
                    <a href="" class="btnSmart btn-secondGreen">Ver todos</a>
                </div>
            </div>
        </div>

    </article>
@endsection