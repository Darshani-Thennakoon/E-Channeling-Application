@extends('layouts.navbar3')

@section('content')
<title>Dashboard</title>


<body>


    <div class="container">
        <div class="row">
            <div class="col-2">

               

            </div>

            <div class="col-10">
                <div class="container-fluid ">
                    <div class="row ">
                        <div class="col-md-2">
                        </div>
                        <div class="col-mb-10 " id="main">
                        </div>

                        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4 mt-5 ">




                            <div class= "container mt-5">
                            <h2>Appointments</h2><br>
                        </div>
                        <div class="btn-group mr-2">
                            <a href="/view_appointment" class="btn btn-sm btn-primary">View Appointments</a>

                        </div>
                    </div>
                        </main>

                    </div>
                </div>
            </div>
        </div>
    </div>
<br>
<br>
<br>


    <div class="carousel-item active">
        <img src="{{URL('/images/home.jpg')}}" class="d-block w-100" width="500" height="900">
        <div class="carousel-caption d-none d-md-block">
          
      </div>






    <br> <br> <br> <br>
    <h4> <i> <b> -----------------------------------------------------------------------  Lanka Hospital-CARE HOURS -----------------------------------------------------------------------<b> </i></h4>

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






    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script>
        window.jQuery || document.write(
            '<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')

    </script>
    <script src="../../../../assets/js/vendor/popper.min.js"></script>
    <script src="../../../../dist/js/bootstrap.min.js"></script>

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
        feather.replace()

    </script>

    <!-- Graphs -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
    <script>
        var ctx = document.getElementById("myChart");
        var myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday",
                    "Saturday"
                ],
                datasets: [{
                    data: [15339, 21345, 18483, 24003, 23489, 24092, 12034],
                    lineTension: 0,
                    backgroundColor: 'transparent',
                    borderColor: '#007bff',
                    borderWidth: 4,
                    pointBackgroundColor: '#007bff'
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: false
                        }
                    }]
                },
                legend: {
                    display: false,
                }
            }
        });

    </script>
</body>






@endsection
