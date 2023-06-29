<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">



    <!-- Bootstrap core CSS -->
    <link href=" {{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('css/styleindex.css')}}" rel="stylesheet">
    <link href="{{asset('css/welcomenev.css')}}" rel="stylesheet">
</head>

<header>
    <div class="container-fluede bg-light ">
        <div class="container ">
            <header class="conteiner  py-3">
                <div class="row justify-content-between align-items-center">
                    <div class="col-4 pt-1">
                    <a class="blog-header-logo text-dark" href="/">LANKA  HOSPITAL</a>
                    </div>
                    <div class="col-4 text-center">
                    </div>
                    <div class="col-4 d-flex justify-content-end align-items-center">
                    <p> <B> Contact No : 0815457768 </B></p>

                        <!-- <a class="btn btn-sm btn-outline-primary mr-2" href="{{route('login')}}">Login</a> &nbsp;
                        <a class="btn btn-sm btn-outline-primary" href="{{route('register')}}">Sign up</a> -->
                    </div>
                </div>
            </header>
        </div>
    </div>
</header>

    @yield('content')



    <footer class="blog-footer mt-auto ">
        <p>All Rights Reserved<a href=""> 2023</a> by <a href="">LANKA HOSPITAL</a>.</p>
        <p>
            <a href="#">LANKA HOSPITAL</a>
        </p>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>



</html>
