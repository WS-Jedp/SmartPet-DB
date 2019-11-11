@extends('AdminViews\adminTemplate')

@section('titleWeb')
    Dates
@endsection

@section('styles')
    @parent()
    <link rel="stylesheet" href="{{url('/css/adminProfile.css')}}">
@endsection

@section('actionsAdmin')
    <article class="col-12 m-0 p-3 d-flex flex-column justify-content-start align-items-start row sectSubscriptions">
            <div class="d-flex flex-row my-3 p-0  justify-content-center align-items-center col-12 row">
                    <div class="col-12 col-md-3 m-0 p-0">
                      <figure class="imgProfile">
                        <img src="" alt="Imagen Usuario" width="100%">
                      </figure>
                    </div>
                    <div class="col-12 col-md-9 d-flex flex-column m-0 p-0 justify-content-start align-items-center text-align-start">
                      <h1 class="align-self-start">Nombre De la persona</h1>
                      <h5 class="align-self-start">Tipo de perfil</h5>
                    </div>
                  </div>
                
                  <div class="d-flex col-12 m-0 p-0 justify-content-start align-items-start row">
                
                    <article class="d-flex flex-column col-12 col-md-6 m-0 p-0 justify-content-start align-items-start">
                      <h4>Descripcion:</h4>
                      <p class="text-black">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum voluptate laborum cupiditate doloremque, doloribus hic quam iste excepturi nam veritatis.
                      </p>
                    </article>
                
                    <article class="d-flex flex-column col-12 col-md-6 m-0 p-0 justify-content-start align-items-start">
                      <h4>Descripcion:</h4>
                      <p class="text-black">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum voluptate laborum cupiditate doloremque, doloribus hic quam iste excepturi nam veritatis.
                      </p>
                    </article>
                  </div>
                
                  <div class="col-6 row flex-row align-self-start">
                    <div class="col-5 m-0 p-1">
                        <a href="" class="btnSmart btn-mainBlue">Editar</a>
                    </div>
                    <div class="col-5 m-0 p-1">
                        <a href="" class="btnSmart btn-secondBlue">Cancelar subscripcion</a>                      
                    </div>
                  </div>
    </article>
@endsection