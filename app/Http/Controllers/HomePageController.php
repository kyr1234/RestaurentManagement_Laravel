<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Food;
use App\Models\Cart;

class HomePageController extends Controller
{
    //
    function index(){
$data=Food::all();
return view("homepage",["datas"=>$data]);
    }

    function redirect(){
        $usertype=Auth::user()->usertype;
        if($usertype=='1')
        {
          return view("admin.adminhome");
        }
        else
        {
          $user_id=Auth::id();
          $count=Cart::where('user_id',$user_id)->count();
          return view("homepage",["order"=>$count]);
        }

    }



function allusers(){



}












}
