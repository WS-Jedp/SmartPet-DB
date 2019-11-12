@extends('AdminViews\adminTemplate')

@section('titleWeb')
    Users
@endsection


@section('actionsAdmin')
    <article class="col-12 m-0 p-3 d-flex flex-column justify-content-start align-items-start row sectSubscriptions">
        <h2 class="m-0 p-0">Tipo de Usuarios</h2>
        <hr class="m-0 mb-3 p-0">
        <p class="text-black">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Impedit unde iste fugiat, quis nobis atque reiciendis fugit quaerat excepturi alias.
        </p>
        
        <div class="col-10 m-0 p-0 d-flex flex-column justify-content-between align-items-start row tableData">
            <table class="table">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Tipo</th>
                        <th scope="col">Cantidad de personas</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($typesUser as $typeUser)
                        <tr>
                            <th>{{$typeUser->id_type_user}}</th>
                            <td>{{$typeUser->type}}</td>
                            <td>85</td>
                            <td class="d-flex flex-row actions row justify-content-around">
                                <div class="m-0 p-0 col-4">
                                    <a href="users/edit/{{$typeUser->id_type_user}}" class="btnSmart btn-mainBlue">Editar</a>
                                </div>
                                <div class="m-0 p-0 col-4">
                                    <a href="" class="btnSmart btn-secondBlue">Eliminar</a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    
                </tbody>
            </table>
            <div class="col-12 d-flex flex-row justify-content-start align-items-center m-0 p-0 row">
                <div class="col-3 m-0 p-3">
                    <a href="/users/create" class="btnSmart btn-mainGreen">Nuevo Usuario</a>
                </div>
                <div class="col-3 m-0 p-3 d-flex flex-row">
                    <a href="" class="btnSmart btn-secondGreen">Ver todos</a>
                </div>
            </div>
        </div>

    </article>
@endsection