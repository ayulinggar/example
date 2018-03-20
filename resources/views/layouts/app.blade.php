<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- manggil materialize.min.css di layout -->
    <link href="{{ asset('css/materialize.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> <!-- icons -->
</head>
<body>
    <div id="app">
    <!-- Dropdown Structure -->
    <ul id="dropdown1" class="dropdown-content">
      <li><a href="#!">one</a></li>
      <li><a href="#!">two</a></li>
      <li class="divider"></li>
      <li><a href="#!">three</a></li>
    </ul>    
    <div class="navbar-fixed">
        <nav class="navbarku"><!-- tambahin class -->
            <div class="nav-wrapper container"> <!-- tambahin class container gak mepet ke sisi --> 
              <a href="#" class="brand-logo">BASEND</a>
              <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="#">HOME</a></li>
                <li><a href="#">PROFILE</a></li>
                <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Dropdown<i class="material-icons right">arrow_drop_down</i></a></li>
              </ul>
            </div>
          </nav>
    </div>
        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <!-- manggil materialize.min.js di layout -->
    <script src="{{ asset('js/materialize.min.js') }}"></script>
        @yield('script')
</body>
</html>
