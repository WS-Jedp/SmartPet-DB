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
                    @foreach($medicaments as $medicament)
                        <tr>
                            <th>{{$medicament->id_medicament}}</th>
                            <td>{{$medicament->name}}</td>        
                            <td>{{$medicament->inventory}}</td>
                            <td class="d-flex flex-row actions row justify-content-around">
                                <div class="m-0 p-1 col-6">
                                    <a href="/medicaments/edit/{{$medicament->id_medicament}}" class="btnSmart btn-mainBlue">Editar</a>
                                </div>
                                <div class="m-0 p-1 col-6">
                                    <button type="button" onclick="send_medicamentId({{$medicament->id_medicament}})"  class="btnSmart btn-secondBlue" data-toggle="modal" data-target="#modalDeleteMedicament">
                                        Eliminar
                                    </button>   
                                </div>
                            </td>
                        </tr>

                        <!-- Modal -->
<div class="modal fade" id="modalDeleteMedicament" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                <button onclick="drop_medicament(value)" type="button" id="dropMedicament" class="btnSmart btn-mainPurple">Eliminar</button>
            </div>
        </div>
    </div>
</div>
                    @endforeach
                </tbody>
            </table>
            <div class="col-12 d-flex flex-row justify-content-start align-items-center m-0 p-0 row">
                <div class="col-3 m-0 p-3">
                    <a href="/medicaments/create" class="btnSmart btn-mainGreen">Agregar</a>
                </div>
            </div>
        </div>

    </article>
@endsection

@section('scripts')
    @parent
    <script src="{{url('js/FormsData/medicamentsData/medicamentsData.js')}}"></script>
@endsection