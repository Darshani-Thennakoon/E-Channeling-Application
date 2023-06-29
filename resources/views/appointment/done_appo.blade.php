@extends('layouts.navbar2')
@section('content')

<section id="appointment" class="appointment section-bg">
    <div class="container mt-5">


       

       
        @if (session('Done'))
               <div class="alert alert-success text-center" role="alert">
                {{ session('Done')}}
        </div>
        @endif
        
        

        <div class="text-center mt-5 mb-2">
            <a href="/home" class="btn btn-success mr-2"> <<- Back to Home</a> &nbsp; <br>

            <br> <br>
            <a href="/create_appointment" class="btn btn-primary"> Make another Appointment ->> </a>
        
    </div>

    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{URL('/images/home.jpg')}}" class="d-block w-100" width="500" height="900">
        <div class="carousel-caption d-none d-md-block">
          
      </div>


        <section id="services" class="services">
            <div class="container mt-2">



                

            </div>
        </section><!-- End Services Section -->











    </div>
</section><!-- End Appointment Section -->


<!--footer-->

<br> <br> <br> <br>
    <h4> <i> <b> -----------------------------------------------------------------------------------  Lanka Hospital-CARE HOURS -----------------------------------------------------------------------------------<b> </i></h4>

    <BR>
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

    </center>
    <hr>
    <center><b>Created By Lanka Hospital   | All Rights Reserved</b></center><br>


    <!--Link jquery and javascript-->
    <script src="../../js/jquery.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
    <script src="../../js/adminPanel.js"></script>

</body>

</html>




@endsection
