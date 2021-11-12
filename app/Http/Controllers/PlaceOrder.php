<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class PlaceOrder extends Controller
{
    //
    function placeorder(Request $req){
    
        foreach($req->foodname as $key=>$foodname){
                $data=new Order;
                $data->foodname = $foodname;
                $data->price=$req->price[$key];
                $data->quantity = $req->quantity[$key];
                $data->name = $req->name;
                $data->address=$req->address;
                $data->phone=$req->phone;
                $data->save();
        }


    }

    function vieworder(){
        return view("admin.orders");
    }
}
