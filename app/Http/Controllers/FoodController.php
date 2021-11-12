<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Food;

class FoodController extends Controller
{
    //
    function foodmenu(){
      $data=Food::all();
      return view("admin.addfoodmenu",["datas"=>$data]);
    }
    function deletemenu($id){
      $fooditem=Food::find($id);
      $fooditem->delete();
      return redirect()->back();
    }

function updatemenu(){
  $fooddata=Food::find($id);
  return view("admin.addfoodmenu",["data"=>$fooddata]);
}

function updateindb(Request $req, $id){
  $data=Food::find($id);
  $data->title=$req->title;
  $data->description=$req->description;
  $data->price=$req->price;
  $image=$req->image;
  $imagename=time()+"."+$image->getClientOriginalExtension();
  $req->image->move("foodfolder",$imagename);
  $data->image=$imagename;
  $data->save();

}

function addfood(Request $req){
  $newfood=new Food;
  $newfood->title=$req->title;
  $newfood->description=$req->description;
  $newfood->price=$req->price;
  $image=$req->image;
  $imagename=time()+'.'+$image->getClientOriginalExtension();
  $req->image->move("/foodfolder",$imagename);
  $newfood->image=$imagename;
  $newfood->save();
  return redirect()->back();
}

}
