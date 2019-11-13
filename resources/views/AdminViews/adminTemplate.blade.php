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
              <a>Inicio</a>
            <div class="navDecoration"></div>
        </li>
        <li class="col-12 menuBtns">
                <a href="/subscriptions">Subscripciones</a>
            <div class="navDecoration"></div>
        </li>
        <li class="col-12 menuBtns">
            <a>Empleados</a>
            <div class="navDecoration"></div>
        </li>
        <li class="col-12 menuBtns">
            <a href="/users">Usuarios</a>
            <div class="navDecoration"></div>
        </li>
        <li class="col-12 menuBtns">
              <a>Mascotas</a>
            <div class="navDecoration"></div>
        </li>
        <li class="col-12 menuBtns">
              <a>Servicios</a>
            <div class="navDecoration"></div>
        </li>
        <li class="col-12 menuBtns">
              <a>Medicamentos</a>
            <div class="navDecoration"></div>
        </li>
        <li class="col-12 menuBtns">
              <a>Vacunas</a>
            <div class="navDecoration"></div>
        </li>
        <li class="col-12 menuBtns">
            <a>Estados</a>
            <div class="navDecoration"></div>
        </li>
        <li class="col-12 menuBtns">
            <a href="">Perfil</a>
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
