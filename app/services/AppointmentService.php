<?php
namespace App\services;
use App\Appointments;

class AppointmentService
{

    public function getAll(){
      $appointment = new Appointments();
      return $appointment;
    }

    public  function create(){

//        $appointment=new Appointments();
//
//        $appointment->location      =   $req['location'];
//        $appointment->description   =   $req['description'];
//        $appointment->notes         =   $req['notes'];
//        $appointment->reminder      =   $req['reminder'];
//
//        $appointment->save();
        return 20;
    }

    public function update($id){
        $appointment =  Appointments::where('id',$id)->update(['location'=>"kwazulunatal",'description'=>"update testing",
            'notes'=>'unit testing update','reminder'=>'reminders updates']);
        return 'updated';
    }

    public  function  read($id){
        $appointment = Appointments::where('id',$id)->first();
        return $appointment->id;
    }

    public function delete($id){
        $appointment = Appointments::where('id',$id)->delete();
        return 'delete';
    }
}