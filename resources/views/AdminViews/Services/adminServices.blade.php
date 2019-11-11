@extends('AdminViews\adminTemplate')

@section('titleWeb')
    Services
@endsection


@section('actionsAdmin')
    <article class="col-12 m-0 p-3 d-flex flex-column justify-content-start align-items-start row sectSubscriptions">
        <h2 class="m-0 p-0">Servicios</h2>
        <hr class="m-0 mb-3 p-0">
        <p class="text-black">
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Optio sit alias facere minima neque, dolorem provident repellendus! Quaerat, rerum libero?
        </p>
        
        <div class="col-12 m-0 mb-3 p-0 d-flex flex-column justify-content-between align-items-start row tableData">
            <table class="table">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Servicio</th>
                        <th scope="col">Cantidad de Personas</th>
                        <th scope="col">Estado</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>1</th>
                        <td>Medicina</td>
                        <td>15</td>
                        <td>Disponible</td>
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
                    <a href="" class="btnSmart btn-mainGreen">Agregar servicio</a>
                </div>
            </div>
        </div>

        {{-- Schedules table --}}
        <h2 class="m-0 p-0">Horario</h2>
        <hr class="m-0 p-0 mb-3">
        <p class="text-black">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi rerum, animi asperiores nisi est officia. Quas temporibus repellendus eum harum.
        </p>
         <div class="col-12 m-0 p-0 d-flex flex-column justify-content-between align-items-start row tableData">
            <table class="table">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Horario</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Hora de comienzo</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>1</th>
                        <td>8:00 - 14:00</td>
                        <td>Diurno</td>
                        <td>07:00 a.m</td>
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
                    <a href="" class="btnSmart btn-mainGreen">Agregar Horario</a>
                </div>
                
            </div>
        </div>

        <div class="col-3 m-0 p-3">
            <a href="" class="btnSmart btn-mainBlue">Ver servicios en vivo</a>
        </div>
    </article>
@endsection