<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chef;

class ChefController extends Controller
{
    //
    function chefs(){
        $data=Chef::all();
        return view("admin.chefs",["data"=>$data]);
        }
    
        function chefadd(Request $req){
          $data=new Chef;
          $data->name=$req->name;
          $data->speciality=$req->speciality;
          $image=$req->image;
          $imagename=time()+"."+$image->getClientOriginalExtension();
          $req->image->move("chefimage",$imagename);
          $data->image=$imagename;
          $data->save();
          return redirect()->back();
        }
    
        function chefdelete($id){
          $data=Chef::find($id);
          $data->delete();
          return redirect()->back();
        }
    
        function chefupdate($id){
          $data=Chef::find($id);
          return view("admin.chefupdateform",["data"=>$data]);
        }
    
    
    
     function updatechefdata(Request $req,$id){     
          $data=Chef::find($id);
          $data->name=$req->name;
          $data->speciality=$req->speciality;
          $image=$req->image;
          $imagename=time()+"."+$image->getClientOriginalExtension();
          $req->image->move("chefimage",$imagename);
          $data->image=$imagename;
          $data->save();
          return redirect()->back();
     }
    
}
