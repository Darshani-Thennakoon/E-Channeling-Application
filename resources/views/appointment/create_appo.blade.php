@extends('layouts.navbar2')
@section('content')

<section id="appointment" class="appointment section-bg" style= "background: url('../images/a3.jpg') no-repeat;">
    <div class="container mt-5" >


    <body style='background-color: bule;'>

   

   <section class=" align-items-center  ">
    <div class="container mt-5 mb-2 ">
    <marquee> <h1> <B>Welcome to  <i>LANKA HOSPITAL </i> </B></h1> </marquee> <br> <br>
    <img src="{{URL('/images/000.avif')}}" class="d-block w-100" width="2" height="500">   

       
    </div>
</section>



        <div class="containe mt-5 " style="">

            @if (session('Done'))
            <div class="alert alert-success" role="alert">
                {{ session('Done')}}
            </div>
            @endif
            <div class="container">
                <br> 
            <h2>Make an Appointment</h2>
            </div>

        </div>

<br> <br>



        <form method="POST" action="/store_appointment">
            @csrf
            <div class="row">
                <div class="col-md-4 form-group">
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name"
                        placeholder="Your Name" value="{{ old('name') }}" required>

                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
<br>

            <div class="row">
                <div class="col-md-4 form-group mt-3 mt-md-0">
                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="Your Email"
                    value="{{ old('email') }}" required>
                  
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                </div>
            </div>
<br>
                <div class="row">
                <div class="col-md-4 form-group mt-3 mt-md-0">
                    <input type="tel" class="form-control @error('phone') is-invalid @enderror" name="phone" id="phone" placeholder="Your Phone"
                    value="{{ old('phone') }}" required>
                    
                    @error('phone')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

            </div>

            
            <div class="row">
                <div class="col-md-4 form-group mt-3">
                    <input type="date" name="date" class="form-control datepicker @error('date') is-invalid @enderror" id="date"
                        placeholder="Appointment Date" value="{{ old('date') }}" required >
                        @error('date')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                </div>
                </div>



                <div class="row">

                <div class="col-md-4 form-group mt-3">
                    <select name="doctor" id="doctor" class="form-select @error('doctor') is-invalid @enderror" value="{{ old('doctor') }}" required>
                        <option value="">Select Doctor</option>
                        <option value="Mr.D.K Bandara">Mr.D.K Bandara</option>
                        <option value="Mr.Upul herath">Mr.Upul Herath</option>
                        <option value="Ms.Wasanthi Kumari">Ms.Wasanthi Kumari</option>
                        
                    </select>

                    @error('doctor')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                </div>
            </div>

            <div class="form-group mt-3">
                <textarea class="form-control @error('message') is-invalid @enderror" name="message" rows="2" placeholder="Message (Optional)"  value="{{ old('message') }}" required></textarea>
                
                @error('message')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            
            <div class="text-center mt-4" ><button type="submit" class="btn btn-primary">{{ __('Submit Appointment') }}</button></div>
        </form>


       








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




