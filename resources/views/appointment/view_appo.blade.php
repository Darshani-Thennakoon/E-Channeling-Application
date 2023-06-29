@extends('layouts.navbar3')
@section('content')


<div class="container mt-5">

    <div class="row justify-content-center  ">
        <div class="col-md-12 mt-5">

            <div class="card">
                {{-- @if (session('done'))
                <div class="alert alert-sucsess text-center" role="alert">
                    {{session('done')}}
                </div>
                @endif --}}

                @if (session('delete'))
                <div class="alert alert-danger text-center" role="alert">
                    {{session('delete')}}
                </div>
                @endif

                @if (session('update'))
                <div class="alert alert-success text-center" role="alert">
                    {{session('update')}}
                </div>
                @endif

                @if (session('already'))
                <div class="alert alert-primary text-center" role="alert">
                    {{session('already')}}
                </div>
                @endif

                <div class="card-header ">
                    <h3>All Appointments</h3>
                    <a href="/admin" class="btn btn-outline-primary" style="float:right;">Back</a>
                </div>

                <div class="card-body">
                    <table class="table table-light">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Date</th>
                                
                                <th>Doctor</th>
                                <th>Message</th>
                                
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($appointment as $data )
                            <tr>
                                <td>{{$data->id}}</td>
                                <td>{{$data->name}}</td>
                                <td>{{$data->email}}</td>
                                
                                <td>{{$data->phone}}</td>
                                <td>{{$data->date}}</td>
                                <td>{{$data->doctor}}</td>
                                <td>{{$data->message}}</td>
                                <td>
                                    <!-- @if ($data->status == 1)
                                    <span style="color: rgb(7, 248, 50)">Confirmed</span>
                                    @else
                                    <span style="color: red">Waiting...</span> 
                                    @endif -->
                                    <a href="/delete_appointment/{{$data->id}}" class="btn btn-danger">Delete</a>
                                    
                                    
                                </td>
                                
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
