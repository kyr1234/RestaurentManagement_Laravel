<?php

namespace App\Http\Controllers;
use App\Models\Food;
use Illuminate\Http\Request;

class AddFood extends Controller
{
    //
    function addfood(Request $req){
      $newfood=new Food;
      $newfood->title=$req->title;
      $newfood->description=$req->description;
      $newfood->price=$req->price;

      $image=$req->image;
      $imagename=time()+'.'+$image->getClientOriginalExtension();
      $req->image->move("foodfolder",$imagename);
      $newfood->image=$imagename;
      $newfood->save();
      return view("dashboard");
    }

}
