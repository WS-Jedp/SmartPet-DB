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
                    @foreach ( $subscriptions as $subscription )
                    <tr>
                        <th>{{$subscription->id_subscription}}</th>
                        <td>{{$subscription->subscription}}</td>
                        <td>{{$subscription->price}}</td>
                        <td>85</td>
                        <td class="d-flex flex-row actions row justify-content-around">
                            <div class="m-0 p-0 col-4">
                                <a href="/subscriptions/edit/{{$subscription->id_subscription}}" class="btnSmart btn-mainPurple">Editar</a>
                            </div>
                            <div class="m-0 p-0 col-4">
                                    <button type="button" onclick="send_id({{$subscription->id_subscription}})" class="btnSmart btn-secondBlue" data-toggle="modal" data-target="#exampleModalCenter">
                                            Eliminar
                                    </button>
                            </div>
                        </td>
                    </tr>

                    <!-- Modal -->
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                        <button onclick="drop_subscription(value)" type="button" id="id_btn" class="btnSmart btn-mainPurple">Eliminar</button>
                    </div>
              </div>
            </div>
          </div>
                    @endforeach
                    
                </tbody>
            </table>
            
        </div>

        <div class="col-12 d-flex flex-row justify-content-start align-items-center row m-0 p-0">

            <div class="col-3 p-2">
                <a href="/subscriptions/create" class="btnSmart btn-mainGreen">Crear Subscripcion</a>
            </div>
            <div class="col-3 p-2">
                <button class="btnSmart btn-secondGreen">Ver Todas</button>
            </div>

        </div>
        

    </article>
@endsection

@section('scripts')
@parent
<script src="{{url("js/FormsData/UserData/typeUser.js")}}"></script>
@endsection