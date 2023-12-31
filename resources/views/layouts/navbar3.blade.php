<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- <title>{{ config('app.name', 'Laravel') }}</title> --}}

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Bootstrap core CSS -->
    <link href=" {{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <!-- {{-- <link href="{{ asset('css/styleindex.css') }}" rel="stylesheet"> --}} -->
    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
    <link href="{{ asset('css/welcomenev.css') }}" rel="stylesheet">
    <!-- <link href="{{ asset('css/stylehome.css') }}" rel="stylesheet"> -->
    <link href="{{ asset('css/sticky-footer.css') }}" rel="stylesheet">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<header>
    <div id="" class="fixed-top">
        <nav id="navbar" class="navbar navbar-expand-md navbar-light bg-white shadow-sm fixed-top ">
            <div class="container ">
                <div class="col-9 ">
                    <nav class="navbar order-last order-lg-0">
                        <h3>
                            <!-- <img src="{{URL('/images/logo.png')}}" width="30px" height="30px"> -->
                            LANKA HOSPITAL</h3>
                        <ul>
                            <!-- <li><a class="nav-link scrollto" href="/admin">Dashboard</a></li>
                            <li><a class="nav-link scrollto" href="#services">Services</a></li>
                            <li><a class="nav-link scrollto" href="#departments">Departments</a></li>
                            <li><a class="nav-link scrollto" href="#doctors">Doctors</a></li>
                           
                            <li><a class="nav-link scrollto" href="#appointment">Show Appointments</a></li>
                        </ul> -->
                        <i class="bi bi-list mobile-nav-toggle"></i>
                    </nav>

                </div>
                <div class="col-3 ">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav me-auto">
                        </ul>
                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ms-auto">
                            <!-- Authentication Links -->
                            @guest
                            @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @endif

                            @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                            @endif
                            @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>

<body >
@yield('content')

</body>

         
        {{-- <footer class="footer ">
            <div class="container text-center mb-5">
               <p>&copy; 2022-2023 ASIRI, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
            </div>
        </footer> --}}
<!-- Bootstrap core JavaScript
        ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/jshome.js')}}"></script>

</html>
