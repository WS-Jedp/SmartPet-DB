@extends('masterTemplate')

@section('titleWeb')
    Login
@endsection()

{{-- Styles section --}}
@section('styles')
    <link rel="stylesheet" href="{{url('/css/loginStyle.css')}}">
@endsection

{{-- Menu section --}}
@section('menu')

<article class="col-12 d-flex flex-column row m-0 p-0 justify-content-center align-items-center p-3">
        <div class="d-flex flex-column justify-content-center align-items-center">
            <figure class="imgUser">
                <img src="" alt="Imagen Usuario">
            </figure>
            
            <h4>Ingresar</h4>
        </div>
        
        <hr>
        
        <form method="POST" action="{{ route('login') }}" class="d-flex flex-column align-items-center p-2 col-12 p-3 row" id="formLogin">
            @csrf
           <label for="email" class="col-12 mb-4 p-0">
                <div class="form-login col-12 col-md-12 m-0 p-0">
                    <input type="email" name="email" placeholder="Ingresa tu usuario" required id="inputText" class="@error('email') is-invalid @enderror"  value="{{ old('email') }}" autocomplete="email" autofocus>
                    <div class="input-login"></div>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
           </label>

           <label for="password" class="col-12 mb-4 p-0">
                <div class="form-login col-12 col-md-12 m-0 p-0">
                    <input type="password" name="password" placeholder="Ingresa tu contraseña" required id="inputText" class="@error('password') is-invalid @enderror" required autocomplete="current-password">
                    <div class="input-login"></div>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
           </label>

           <button type="submit" class="btnSmart btn-secondPurple align-self-start">Ingresar</button>
        </form>
              
       
        </article>

@endsection()

{{-- Section 2 --}}
@section('actionsAdmin')

<div class="col-12 d-flex flex-column justify-content-start align-items-start m-0 p-3 infoAdmin">
    <h1 class="align-self-start">SISTEMA ADMIN </h1>
    <hr>
</div>

<div class="col-12 m-0 p-3 d-flex justify-content-center align-items-center">
    <img src="{{url('Illustrations/AtencionUnica.png')}}" alt="Imagen admin">
</div>

<div class="col-12 d-flex justify-content-start align-items-start m-0 p-3">
    <p class="text-black">
       Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum ab voluptatem officiis voluptates praesentium natus perferendis expedita repellendus non optio! Sapiente vitae modi quod iusto. Explicabo, temporibus voluptate. Error molestias officiis rerum distinctio fugiat aspernatur!
    </p>
</div>

@section('scripts')
    @parent
    
    <script src="{{url('js/FormsData/UserData/crudUser.js')}}"></script>
@endsection

@endsection