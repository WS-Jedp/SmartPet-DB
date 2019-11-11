<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title> SmartPet - @section('titleWeb') Admin @show </title>
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:400,500,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{url('/css/bootstrap.min.css')}}">
    
    {{-- Styles --}}
    <link rel="stylesheet" href="{{url('/css/style.css')}}">
    @yield('styles')
</head>
<body>
    <section class="container-fluid m-0 p-0 d-flex justify-content-start align-items-start row flex-row sect-all">

      
        <menu class="col-12 col-md-3 m-0 p-0 d-flex flex-column justify-content-start align-items-start row">
            @yield('menu')
        </menu>

        <section class="col-12 col-md-9 m-0 p-0 d-flex flex-column justify-content-start align-items-start actionsAdmin row">
            @yield('actionsAdmin')
        </section>
    </section>

    <script src="{{url('/js/jquery-3.4.1.min.js')}}"></script>
    <script src="{{url('/js/bootstrap.min.js')}}"></script>
    @yield('scripts')
</body>
</html>