@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="en">

<head>

    <title>Home</title>

    <!-- Link bootstrap css -->
    <link rel="stylesheet" href="../../css/bootstrap.min.css">


</head>

<body style="background-color: #a4cef8 ;">
    <nav class="navbar navbar-expand-lg bg-light ">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><b>Lanka Hospital</b></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About Us</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Categories
          </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Mother Care</a></li>
                            <li><a class="dropdown-item" href="#">Child Care</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Elder Care </a></li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/create_appointment"> Make an Appointment </a>
                    </li>

                </ul>

                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>



<br> <br> <br>

    <div class="container">
        <div class="row">


            <div class="col-md-6">



                <div class="card mt-4" style="width:16rem;border:black;">
                    <div class="card-body">
                        <marquee> <img src="images/4.png" height="220px" width="4px" class="card-img-top"><br><br> </marquee>
                        <br>



                        <a class="dropdown-item" href="#"> <b> Neurologists </b> </a>
                    </div>
                </div>


                <div class="card mt-4" style="width:16rem;border:black;">
                    <div class="card-body">
                        <marquee> <img src="images/3.png" height="220px" width="10px" class="card-img-top"><br><br> </marquee>
                        <br>

                        <a class="dropdown-item" href="# "> <b> Child Dotors </b> </a>

                    </div>

                </div>


                <div class="card mt-4" style="width:16rem;border:black;">
                    <div class="card-body">
                        <marquee> <img src="images/1.png" height="220px" width="10px" class="card-img-top"><br><br> </marquee>
                        <br>

                        <a class="dropdown-item" href="#l"> <b> Heart Doctrs </b> </a>

                    </div>
                </div>

            </div>
            <div class="col-md-6 mt-5">
                <marquee><img src="images/6.jpg" height="550px"></marquee>
                <marquee behavior="scroll" direction="right" scrollamount="12"> <br><br>
                    <h1 style="text-align:right;color:black;font-size:28px;font-family:Goudy Stout;"> LANKA HOSPITAL</h1>
                </marquee>

                <br>
                <br>
                <br>
                <br>

                
                <br>
             <H2> <b> <i>
               <center> Make an appointment through our Video/Audio Doctor Channeling Service </center> </i> </b> </H2>

               

<br> <br>

          </div>
        </div>
    </div>
<!--add users-->

<!-- ======= Hero Section ======= -->
<section class=" align-items-center  ">
    <div class="container mt-5 mb-2 ">
    
        <h2>
       <center>  <a href="/create_appointment" class="btn btn-primary">Make an Appointment</a> </center>

        </h2>
    </div>
</section>





    <!--footer-->

    <br> <br> <br> <br>
    <h4> <i> <b> -----------------------------------------------------------------------  Lanka Hospital-CARE HOURS --------------------------------------------------<b> </i></h4>

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
