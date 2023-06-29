<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\appo;

class appointment extends Controller
{
    //return Create Appointment View
    function returnCreateAppointmentView(){
        return view('appointment.create_appo');
    }


    function doneAppointment(){
        return view('appointment.done_appo');
    }



    function viewAppointment(){
        $appointments = appo::all(); //call the emp model and fitch the all emp details
        return view('appointment.view_appo')->with('appointment', $appointments);
        
    }


       //store Appointment details
   function storeAppointmentDetails(Request $request){ // catch the form data to request array

    //check data validation
 


   $data = new appo; // create emp model object
    $data->name = $request->name;


    $data->email = $request->email;
    $data->phone = $request->phone;
    $data->date = $request->date;
    $data->doctor = $request->doctor;
    $data->message = $request->message;
    $data->status = 0;
    $data->save();  
    return redirect('/done_appointment')->with('Done','Appointment Created!');
    }



    function deleteAppointment($id){
        // dd($id);  //see the correct id is set diedoll
        $data = appo::find($id); 
        // dd($data);    //see the correct data is set into the data variable 
        $data->delete();
        return redirect()->back()->with('delete','Data Deleted');
     }


     function  updateAppointment($id, Request $request){
        $data = appo::find($id);
        if ($data->status== 0) {
            $data->status = 1;
            $data->save();
            return redirect('/view_appointment')->with('update','Appointment Confirmed !');
        }else{
            return redirect('/view_appointment')->with('already','Appointment Already Confirmed !!!');

        }
        
     }



}
