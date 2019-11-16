@extends('AdminViews\adminTemplate')

@section('titleWeb')
    Pets
@endsection


@section('actionsAdmin')
    <article class="col-12 m-0 p-3 d-flex flex-column justify-content-start align-items-start row sectSubscriptions">
    
        <h2 class="m-0 p-0">Tipos de Mascotas</h2>
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
                    @foreach ($typesPet as $typePet)
                        <tr>
                            <th>{{$typePet->id_type_pet}}</th>
                            <td>{{$typePet->type}}</td>
                            <td>85</td>
                            <td class="d-flex flex-row actions row justify-content-around">
                                <div class="m-0 p-0 col-4">
                                    <a href="/pets/type/edit/{{$typePet->id_type_pet}}" class="btnSmart btn-mainBlue">Editar</a>
                                </div>
                                <div class="m-0 p-0 col-4">
                                     <button type="button" onclick="send_typePetId({{$typePet->id_type_pet}})"  class="btnSmart btn-secondBlue" data-toggle="modal" data-target="#modalDeleteTypePet">
                                        Eliminar
                                    </button>   
                                </div>
                            </td>
                        </tr>    

        <!-- Modal -->
<div class="modal fade" id="modalDeleteTypePet" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">¿Estas Seguro?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">
                <p class="text-black">
                    Estas a punto de eliminar una subscripcion
                </p>
            </div>
            <div class="modal-footer">
                <button onclick="drop_typePet(value)" type="button" id="dropTypePet" class="btnSmart btn-mainPurple">Eliminar</button>
            </div>
        </div>
    </div>
</div>
                    @endforeach
                </tbody>
            </table>
            <div class="col-12 d-flex flex-row justify-content-start align-items-center m-0 p-0 row">
                <div class="col-3 m-0 p-3">
                    <a href="/pets/type/create" class="btnSmart btn-mainGreen">Nuevo Tipo</a>
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
                    @foreach($gendersPet as $genderPet)
                    <tr>
                            <th>{{$genderPet->id_gender_pet}}</th>
                            <td>{{$genderPet->gender}}</td>
                            <td>85</td>
                            <td class="d-flex flex-row actions row justify-content-around">
                                <div class="m-0 p-0 col-4">
                                    <a href="/pets/gender/edit/{{$genderPet->id_gender_pet}}" class="btnSmart btn-mainBlue">Editar</a>
                                </div>
                                <div class="m-0 p-0 col-4">
                                     <button type="button" onclick="send_genderPetId({{$genderPet->id_gender_pet}})"  class="btnSmart btn-secondBlue" data-toggle="modal" data-target="#modalDeleteGenderPet">
                                        Eliminar
                                    </button>   
                                </div>
                            </td>
                        </tr>

<!-- Modal -->
<div class="modal fade" id="modalDeleteGenderPet" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">¿Estas Seguro?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">
                <p class="text-black">
                    Estas a punto de eliminar una subscripcion
                </p>
            </div>
            <div class="modal-footer">
                <button onclick="drop_genderPet(value)" type="button" id="dropGenderPet" class="btnSmart btn-mainPurple">Eliminar</button>
            </div>
        </div>
    </div>
</div>
{{-- End Modal --}}
                    @endforeach
                </tbody>
            </table>
            <div class="col-12 d-flex flex-row justify-content-start align-items-center m-0 p-0 row">
                <div class="col-3 m-0 p-3">
                    <a href="pets/genders/create" class="btnSmart btn-mainGreen">Agregar Genero</a>
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
                        @foreach($racesPet as $racePet)
                            <tr>
                                <th>{{$racePet->id_race_pet}}</th>
                                <td>{{$racePet->race}}</td>
                                <td>2</td>
                                <td>{{$racePet->id_type_pet}}</td>
                                <td class="d-flex flex-row actions row justify-content-around">
                                    <div class="m-0 p-0 col-4">
                                       <a href="/pets/races/edit/{{$racePet->id_race_pet}}" class="btnSmart btn-mainBlue">
                                        Editar
                                    </a>
                                    </div>
                                    <div class="m-0 p-0 col-4">
                                         <button type="button" onclick="send_racePetId({{$racePet->id_race_pet}})"  class="btnSmart btn-secondBlue" data-toggle="modal" data-target="#modalDeleteRacePet">
                                            Eliminar
                                        </button>   
                                    </div>
                                </td>
                            </tr>
                            <!-- Modal -->
<div class="modal fade" id="modalDeleteRacePet" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">¿Estas Seguro?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">
                <p class="text-black">
                    Estas a punto de eliminar una subscripcion
                </p>
            </div>
            <div class="modal-footer">
                <button onclick="drop_racePet(value)" type="button" id="dropRacePet" class="btnSmart btn-mainPurple">Eliminar</button>
            </div>
        </div>
    </div>
</div>
{{-- End Modal --}}
                        @endforeach
                        
                    </tbody>
                </table>
                <div class="col-12 d-flex flex-row justify-content-start align-items-center m-0 p-0 row">
                    <div class="col-3 m-0 p-3">
                        <a href="/pets/races/create" class="btnSmart btn-mainGreen">Agregar raza</a>
                    </div>
                    
                </div>
            </div>

        <div class="col-3 m-0 p-3">
            <a href="" class="btnSmart btn-mainBlue">Ver todas las mascotas</a>
        </div>
    </article>
@endsection

@section('scripts')
@parent 
<script src="{{url('js/FormsData/petsData/petsCRUD.js')}}"></script>
@endsection