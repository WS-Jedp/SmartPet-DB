@extends('AdminViews\adminTemplate')

@section('titleWeb')
    States
@endsection


@section('actionsAdmin')
    <article class="col-12 m-0 p-3 d-flex flex-column justify-content-start align-items-start row sectSubscriptions">
    
        <h2 class="m-0 p-0">Estados de mascotas</h2>
        <hr class="m-0 mb-3 p-0">
        <p class="text-black">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam officia magnam delectus fugiat, nobis expedita.
        </p>
        
        <div class="col-10 m-0 mb-3 p-0 d-flex flex-column justify-content-between align-items-start row tableData">
            <table class="table">
                <thead class="thead-light">                    
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Estado</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($statesPet as $statePet)
                        <tr>
                            <th>{{$statePet->id_state_pet}}</th>
                            <td>{{$statePet->state}}</td>
                            <td class="d-flex flex-row actions row justify-content-around">
                                <div class="m-0 p-0 col-4">
                                    <a href="/states/pets/edit/{{$statePet->id_state_pet}}" class="btnSmart btn-mainBlue">Editar</a>
                                </div>
                                <div class="m-0 p-0 col-4">
                                    <button type="button" class="btnSmart btn-secondBlue" data-toggle="modal" data-target="#exampleModalCenterPet" onclick="sendDeleteStatePetId({{$statePet->id_state_pet}})">
                                            Eliminar
                                    </button>
                                </div>

                    {{-- Modal --}}
                        <div class="modal fade" id="exampleModalCenterPet" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalCenterTitle">¿Estas seguro?</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                Estas a punto de eliminar un estado
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btnSmart btn-mainPurple" onclick="dropStatePet(value)" id="deleteStatePet">Eliminar</button>
                            </div>
                            </div>
                        </div>
                        </div>


                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="col-12 d-flex flex-row justify-content-start align-items-center m-0 p-0 row">
                <div class="col-3 m-0 p-3">
                    <a href="/states/pets/create" class="btnSmart btn-mainGreen">Nuevo Estado</a>
                </div>
            </div>
        </div>

        {{-- Estados citas --}}
       
        <h2 class="m-0 p-0">Estados de citas</h2>
        <hr class="m-0 mb-3 p-0">
        <p class="text-black">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus accusantium necessitatibus aperiam sit odit sint, corrupti maxime nemo itaque architecto.
        </p>
         <div class="col-10 m-0 mb-3 p-0 d-flex flex-column justify-content-between align-items-start row tableData">
            <table class="table">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Estado</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($statesDate as $stateDate)
                        <tr>
                            <th>{{$stateDate->id_state_date}}</th>
                            <td>{{$stateDate->state}}</td>
                            <td class="d-flex flex-row actions row justify-content-around">
                                <div class="m-0 p-0 col-4">
                                    <a href="/states/dates/edit/{{$stateDate->id_state_date}}" class="btnSmart btn-mainBlue">Editar</a>
                                </div>
                                <div class="m-0 p-0 col-4">
                                        <button type="button" class="btnSmart btn-secondBlue" data-toggle="modal" data-target="#exampleModalCenterDate" onclick="sendDeleteStateDateId({{$stateDate->id_state_date}})">
                                                Eliminar
                                        </button>
                                </div>

                                {{-- Modal --}}
                        <div class="modal fade" id="exampleModalCenterDate" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalCenterTitle">¿Estas seguro?</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        Estas a punto de eliminar un estado
                                    </div>
                                    <div class="modal-footer">
                                            <button type="button" class="btnSmart btn-mainPurple" onclick="dropStateDate(value)" id="deleteStateDate">Eliminar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                                

                            </td>
                        </tr>
                    @endforeach
                   
                </tbody>
            </table>
            <div class="col-12 d-flex flex-row justify-content-start align-items-center m-0 p-0 row">
                <div class="col-3 m-0 p-3">
                    <a href="/states/dates/create" class="btnSmart btn-mainGreen">Nuevo Estado</a>
                </div>
                
            </div>
        </div>

        {{-- Estados Razas --}}

        <h2 class="m-0 p-0">Estados de usuarios</h2>
        <hr class="m-0 p-0 mb-3">
        <p class="text-black">
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos omnis praesentium autem saepe natus exercitationem sit ad repellat, rem animi?
        </p>
        <div class="col-10 m-0 mb-3 p-0 d-flex flex-column justify-content-between align-items-start row tableData">
                <table class="table">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Estado</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($statesUser as $stateUser)                        
                            <tr>
                                <th>{{$stateUser->id_state_user}}</th>
                                <td>{{$stateUser->state}}</td>
                                <td class="d-flex flex-row actions row justify-content-around">
                                    <div class="m-0 p-0 col-4">
                                        <a href="/states/users/edit/{{$stateUser->id_state_user}}" class="btnSmart btn-mainBlue">Editar</a>
                                    </div>
                                    <div class="m-0 p-0 col-4">
                                        <button type="button" class="btnSmart btn-secondBlue" data-toggle="modal" data-target="#exampleModalCenterUser" onclick="sendDeleteId({{$stateUser->id_state_user}})">
                                            Eliminar
                                        </button>
                                    </div>                        
                                </td>
                            </tr>
                            {{-- Modal --}}
                        <div class="modal fade" id="exampleModalCenterUser" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalCenterTitle">¿Estas seguro?</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                Estas a punto de eliminar un estado
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btnSmart btn-mainPurple" onclick="dropState(value)" id="deleteState">Eliminar</button>
                            </div>
                            </div>
                        </div>
                        </div>
                        
                        @endforeach
                    </tbody>
                </table>
                <div class="col-12 d-flex flex-row justify-content-start align-items-center m-0 p-0 row">
                    <div class="col-3 m-0 p-3">
                        <a href="/states/users/create" class="btnSmart btn-mainGreen">Nuevo Estado</a>
                    </div>
                    
                </div>
            </div>
    </article>
@endsection

@section('scripts')
@parent
<script src="{{url('js/FormsData/statesData/createStates.js')}}"></script>
@endsection