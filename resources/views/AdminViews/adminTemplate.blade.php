@extends('masterTemplate')
@section('titleWeb')
    Home
@endsection

@section('styles')
    <link rel="stylesheet" href="{{url('/css/adminHome.css')}}">
@endsection

@section('menu')

<article class="col-12 d-flex flex-column row m-0 p-0 justify-content-center align-items-center p-3">
<div class="d-flex flex-column justify-content-center align-items-center">
    <figure class="imgUser">
        <img src="" alt="Imagen Usuario">
    </figure>
    
    <h4 class="m-0 p-0">Usuario</h4>
    <h6 class="m-0 p-0 text-white">Tipo de cliente</h6>
</div>

<hr class="m-1 p-0">

<nav class="d-flex flex-column align-self-start p-2 row">
    <ul class="d-flex flex-column align-items-center align-items-md-start row col-12">
        
        <li class="col-12 menuBtns">
              <a href="/home">Inicio</a>
            <div class="navDecoration"></div>
        </li>
        <li class="col-12 menuBtns">
                <a href="/subscriptions">Subscripciones</a>
            <div class="navDecoration"></div>
        </li>
        {{-- <li class="col-12 menuBtns">
            <a>Empleados</a>
            <div class="navDecoration"></div>
        </li> --}}
        <li class="col-12 menuBtns">
            <a href="/users">Usuarios</a>
            <div class="navDecoration"></div>
        </li>
        <li class="col-12 menuBtns">
              <a href="/pets">Mascotas</a>
            <div class="navDecoration"></div>
        </li>
        <li class="col-12 menuBtns">
              <a href="/services">Servicios</a>
            <div class="navDecoration"></div>
        </li>
        <li class="col-12 menuBtns">
              <a href="/medicaments" >Medicamentos</a>
            <div class="navDecoration"></div>
        </li>
        <li class="col-12 menuBtns">
              <a href="/vaccines">Vacunas</a>
            <div class="navDecoration"></div>
        </li>
        <li class="col-12 menuBtns">
            <a href="/states">Estados</a>
            <div class="navDecoration"></div>
        </li>
        <li class="col-12 menuBtns">
            <a href="/profile">Perfil</a>
            <div class="navDecoration"></div>
        </li>
        </ul>
      </nav>
      
      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
        <button class="btnSmart btn-secondPurple" href="{{ route('logout') }}" onclick="event.preventDefault(); 
                    document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
    </button>
</article>
@endsection

@section('scripts')
@parent
<script src="{{url('js/adminCode.js')}}"></script>
@endsection
