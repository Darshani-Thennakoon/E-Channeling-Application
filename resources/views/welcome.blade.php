@extends('layouts.navbar')
@section('content')


<main role="main">

<!DOCTYPE html>
<html lang="en">

<head>
  <title>LANKA HOSPITAL</title>
  <!-- Link bootstrap css -->
  <link rel="stylesheet" href="css/bootstrap.min.css">

  <!-- Link jquery and Javascript -->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
</head>

<body style='background-color: white;'>



  <nav class="navbar navbar-expand-lg navbar-light bg-primary">
    <div class="container-fluid ">
    <div class="col-4 pt-1">
       <center> <a class="navbar-brand" >WELLCOME TO LANKA HOSPITAL</a> </center>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      
</div>

            <div class="col-5 text-center">
                    </div>
                    <div class="col-3 text-center">

                        <!-- <a class="btn btn-sm btn-outline-primary mr-2" href="{{route('login')}}">Login</a> &nbsp;
                        <a class="btn btn-sm btn-outline-primary" href="{{route('register')}}">Sign up</a> -->




      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item dropdown">
            


         
        
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('login')}}"><button type="button" class="btn btn-light">Log In</button></a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('register')}}"><button type="button" class="btn btn-light">Sign In</button></a>
          </li>
        </ul>
      </div>
    </div>
    </div>


  </nav>


  <div class="container ">
            
        </div>



    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{URL('/images/home.jpg')}}" class="d-block w-100" width="500" height="900">
        <div class="carousel-caption d-none d-md-block">
          
      </div>



  

  <!-- footer Section Starts Here -->

  

  </section>
  <!-- footer Section Ends Here -->



</body>

</html>



</main>



 <!--footer-->

 <br> <br> <br> <br>
    <h4> <i> <b> --------------------------------------------------------------------------  Lanka Hospital-CARE HOURS --------------------------------------------------<b> </i></h4>

    <BR> <BR> <BR>
    <BR>
    <img src="../../images/locat.png" width="35px" height="35px"> Lanka Hospital &emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
   
    <b>Contact Info - </b>+94 712424000 &emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
    &emsp;
    <b>Email Address - </b>lankahospital@gmail.com <br> colombo Rd, Kandy,Sri Lanka. <br> &emsp;&emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
    &emsp;&emsp;&emsp; <br>

    <center>

        <img src="images/FB.png" width="67px" height="45px">
        <img src="images/IN.png" width="60px" height="60px">
        <img src="images/WH.png" width="65px" height="45px">

    


    <!--Link jquery and javascript-->
    <script src="../../js/jquery.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
    <script src="../../js/adminPanel.js"></script>

</body>

</html>



@endsection



