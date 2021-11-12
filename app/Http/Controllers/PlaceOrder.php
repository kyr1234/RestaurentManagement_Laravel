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
        $data=order::all();
        return view("admin.orders",["datas"=>$data]);
    }

    function findorder(Request $req){
        $searchvalue=$req->search;
       $data=order::where('name',"LIKE","%".$req->search."%")->orWhere('phoneno',"LIKE","%".$req->search."%")->orWhere('address',"LIKE","%".$req->search."%")->orWhere('foodname',"LIKE","%".$req->search."%")->get();
       return view("admin.searchorder",["datas"=>$data,"searchvalue"=>$searchvalue]);
    }
}
