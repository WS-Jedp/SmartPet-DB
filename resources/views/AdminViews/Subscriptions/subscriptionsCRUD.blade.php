@extends('AdminViews\adminTemplate')

@section('titleWeb')
    Subscriptions Form
@endsection

@section('actionsAdmin')
    <article class="col-12 m-0 p-3 d-flex flex-column justify-content-start align-items-start row sectSubscriptions">

            <div class="alert alert-success alert-dismissible fade show col-12 d-none" role="alert" id="alertSuccess">
                    <strong id="titleAlert">Accion completada!</strong> Accion completada con exito 
                        <button type="button" class="close"  id="closeAlert">
                            <span aria-hidden="true">&times;</span>
                    </button>
            </div>

        <h2 class="m-0 p-0">Subscripciones</h2>
        <hr class="m-0 mb-3 p-0">
        <p class="text-black">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit voluptatibus laborum placeat dolorem odio commodi unde et consequuntur ullam quae.
        </p>
        
        <div class="col-12 m-0 p-0 d-flex flex-column justify-content-between align-items-start row formData">
        
            <form class="col-12 m-0 p-2 d-flex flex-column justify-contetn-center align-items-start row" method="POST" action="/subscriptions/create" id="formSubscriptionCreate">
                
                <div class="col-12 m-0 p-2">
                    <label for="subscription">
                        Nombre de la subscripcion
                    </label>
                    <input type="text" placeholder="Ingresar el nuevo nombre" name="subscription" id="subscription">
                </div>

                <div class="col-4 d-flex flex-column m-0 p-2">
                    <label for="price">Precio</label>
                    <input type="number" placeholder="Ingresa el precio" name="price" id="price">
                </div>

                <div class="col-4 m-0 p-2">
                    <button type="submit" class="btnSmart btn-mainGreen">Crear Subscripcion</button>
                </div>
            </form>
            
        </div>

        <div class="col-12 d-flex flex-row justify-content-start align-items-center row m-0 p-0">

            <div class="col-3 p-2">
                <a href="/subscriptions" class="btnSmart btn-secondGreen">Regresar</a>
            </div>

        </div>
        

    </article>
@endsection

@section('scripts')
    @parent

    <script src="{{url('js/FormsData/UserData/typeUser.js')}}"></script>
@endsection