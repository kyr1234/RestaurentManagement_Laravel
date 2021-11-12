<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;



class ReservationController extends Controller
{
    //
    function reservationform(Request $req){
      $data=new Reservation;
      $data->name=$req->name;
      $data->email=$req->email;
      $data->phonenumber=$req->phone;
      $data->date=$req->date;
      $data->time=$req->time;
      $data->message=$req->message;
      $data->noofguests	=$req->guest;
      $data->save();
      return view("dashboard");
    }

    function reservationdata(){
      $data=Reservation::all();
      return view("admin.reservation",["datas"=>$data]);
    }
}
