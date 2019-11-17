@extends('AdminViews\adminTemplate')

@section('titleWeb')
    Vaccines
@endsection


@section('actionsAdmin')
    <article class="col-12 m-0 p-3 d-flex flex-column justify-content-start align-items-start row sectSubscriptions">
        <h2 class="m-0 p-0">Vacunas</h2>
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
                        <th scope="col">Cada Cuanto (meses)</th>
                        <th scope="col">Tipo de animal</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($vaccines as $vaccine)    
                        <tr>
                            <th>{{$vaccine->id_vaccine}}</th>
                            <td>{{$vaccine->vaccine}}</td>        
                            <td>{{$vaccine->how_often}}</td>
                            <td>perro</td>
                            <td class="d-flex flex-row actions row justify-content-around">
                                <div class="m-0 p-1 col-6">
                                    <a href="/vaccines/edit/{{$vaccine->id_vaccine}}" class="btnSmart btn-mainBlue">Editar</a>
                                </div>
                                <div class="m-0 p-1 col-6">
                                    <button type="button" onclick="send_vaccineId({{$vaccine->id_vaccine}})"  class="btnSmart btn-secondBlue" data-toggle="modal" data-target="#modalDeleteVaccine">
                                        Eliminar
                                    </button>    
                                </div>
                            </td>
                        </tr>

                                        
        <!-- Modal -->
            <div class="modal fade" id="modalDeleteVaccine" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                    <button onclick="drop_vaccine(value)" type="button" id="dropVaccine" class="btnSmart btn-mainPurple">Eliminar</button>
                </div>
          </div>
        </div>
      </div>

                    @endforeach
                </tbody>
            </table>
            <div class="col-12 d-flex flex-row justify-content-start align-items-center m-0 p-0 row">
                <div class="col-3 m-0 p-3">
                    <a href="/vaccines/create" class="btnSmart btn-mainGreen">Agregar Vacuna</a>
                </div>
            </div>
        </div>

    </article>
@endsection

@section('scripts')
@parent
<script src="{{url('js/FormsData/vaccinesData/vaccinesData.js')}}"></script>
@endsection