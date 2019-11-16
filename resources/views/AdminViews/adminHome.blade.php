@extends('masterTemplate')

@section('titleWeb')
    Home
@endsection

@section('styles')
@parent
<link rel="stylesheet" href="{{url('/css/adminHome.css')}}">
@endsection

@section('menu')
    <article class="col-12 m-0 p-2 d-flex flex-column justify-content-between align-items-center welcomeSect">
        <div class="imgUser">
            
        </div>

        <h4>Juanes</h4>
        <h5 class="text-white">Administrador</h5>
        <hr>
        <h3>Titulo h3</h3>
        <p class="text-center">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam, architecto.
        </p>
        <h6>SmartPet - 2019</h6>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
            <a class="btnSmart btn-secondPurple" href="{{ route('logout') }}" onclick="event.preventDefault(); 
                        document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>
    </article>
@endsection

{{-- Cards select --}}
@section('actionsAdmin')

<section class="col-12 m-0 p-2 row d-flex flex-row justify-content-around align-items-center">

    <article class="col-12 col-md-4 m-0 p-2">
        <a href="/subscriptions">
            <div class="card-sm">
                <h2>Subscripciones</h2>
            </div>
        </a>
    </article>
    
    <article class="col-12 col-md-4 m-0 p-2">
        <a href="">
            <div class="card-sm">
                <h2>Empleados</h2>
            </div>
        </a>
    </article>

    <article class="col-12 col-md-4 m-0 p-2">
        <a href="/users">
            <div class="card-sm">
                <h2>Usuarios</h2>
            </div>
        </a>
    </article>
    
    <article class="col-12 col-md-4 m-0 p-2">
        <a href="/states">
            <div class="card-sm">
                <h2>Estados</h2>
            </div>
        </a>
        </article>

    <article class="col-12 col-md-4 m-0 p-2">
        <div class="card-sm">
            <h2>Mascotas</h2>
        </div>
    </article>
    
    <article class="col-12 col-md-4 m-0 p-2">
        <div class="card-sm">
            <h2>Servicios</h2>
        </div>
    </article>

    <article class="col-12 col-md-4 m-0 p-2">
        <div class="card-sm">
            <h2>Vacunas</h2>
        </div>
    </article>

    
    <article class="col-12 col-md-4 m-0 p-2">
        <div class="card-sm">
            <h2>Perfil</h2>
        </div>
    </article>
    
    
</section>
    
@endsection