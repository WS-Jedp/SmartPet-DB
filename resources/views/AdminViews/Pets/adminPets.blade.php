@extends('AdminViews\adminTemplate')

@section('titleWeb')
    Pets
@endsection


@section('actionsAdmin')
    <article class="col-12 m-0 p-3 d-flex flex-column justify-content-start align-items-start row sectSubscriptions">
    
        <h2 class="m-0 p-0">Mascotas</h2>
        <hr class="m-0 mb-3 p-0">
        <p class="text-black">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam officia magnam delectus fugiat, nobis expedita.
        </p>
        
        <div class="col-10 m-0 mb-3 p-0 d-flex flex-column justify-content-between align-items-start row tableData">
            <table class="table">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Tipo</th>
                        <th scope="col">Cantidad de mascotas</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>1</th>
                        <td>Perro</td>
                        <td>85</td>
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
            </div>
        </div>

        {{-- Genders table --}}
       
        <h2 class="m-0 p-0">Generos de mascota</h2>
        <hr class="m-0 mb-3 p-0">
        <p class="text-black">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus accusantium necessitatibus aperiam sit odit sint, corrupti maxime nemo itaque architecto.
        </p>
         <div class="col-10 m-0 mb-3 p-0 d-flex flex-column justify-content-between align-items-start row tableData">
            <table class="table">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Genero</th>
                        <th scope="col">Cantidad de mascotas</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>1</th>
                        <td>Hembra</td>
                        <td>85</td>
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
                    <a href="" class="btnSmart btn-mainGreen">Agregar Genero</a>
                </div>
                
            </div>
        </div>

        {{-- Genders --}}

        <h2 class="m-0 p-0">Raza</h2>
        <hr class="m-0 p-0 mb-3">
        <p class="text-black">
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos omnis praesentium autem saepe natus exercitationem sit ad repellat, rem animi?
        </p>
        <div class="col-10 m-0 mb-3 p-0 d-flex flex-column justify-content-between align-items-start row tableData">
                <table class="table">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Raza</th>
                            <th scope="col">Cantidad de mascotas</th>
                            <th scope="col">Tipo de mascota</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>1</th>
                            <td>Lobo</td>
                            <td>85</td>
                            <td>Perro</td>
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
                        <a href="" class="btnSmart btn-mainGreen">Agregar raza</a>
                    </div>
                    
                </div>
            </div>

        <div class="col-3 m-0 p-3">
            <a href="" class="btnSmart btn-mainBlue">Ver todas las mascotas</a>
        </div>
    </article>
@endsection