@extends('AdminViews\adminTemplate')

@section('titleWeb')
    Users
@endsection


@section('actionsAdmin')
    <article class="col-12 m-0 p-3 d-flex flex-column justify-content-start align-items-start row sectSubscriptions">

        @if ('createType')
            <div class="col-12 alert alert-success  alert-dismissible fade show" role="alert">
                <strong>Holy guacamole!</strong> You should check in on some of those fields below.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif

        <h2 class="m-0 p-0">Usuarios</h2>
        <hr class="m-0 mb-3 p-0">
        <p class="text-black">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo rem inventore hic illo ipsa dignissimos nemo aliquid error eveniet vero.
        </p>
        <div class="col-12 m-0 p-0 d-flex flex-column justify-content-between align-items-start row formData">
        
            <form class="col-12 m-0 p-2 d-flex flex-column justify-contetn-center align-items-start row" method="POST" action="/users/update" id="editTypeUserForm">
                @csrf

                <section class="col-12 m-0 p-0 d-flex flex-row row">

                    {{-- Tipo de usuario --}}
                    <div class="col-6 m-0 p-2">
                        <label for="type">
                            Tipo de usuario
                        </label>
                        <input type="text" name="type" id="type" placeholder="Ingresa el nombre" required value="{{$typeUser->type}}">
                        <input type="number" name="id_type_user" id="id_type_user" hidden value="{{$typeUser->id_type_user}}">
                    </div>
                    
                    
                </section>


                <div class="m-0 p-0 col-12 d-flex flex-row row">

                    <div class="col-3 m-0 p-2">
                        <button type="submit" class="btnSmart btn-mainGreen">Actualizar Usuario</button>
                    </div>
                    <div class="col-3 p-2">
                        <a href="/users" class="btnSmart btn-secondGreen">Regresar</a>
                    </div>
                </div>

                
                </form>
            
        </div>

        <div class="col-12 d-flex flex-row justify-content-start align-items-center row m-0 p-0">

            

        </div>


    </article>
@endsection

@section('scripts')
    @parent

    <script src="{{url('js/FormsData/UserData/typeUser.js')}}"></script>
@endsection