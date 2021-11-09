<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Food;



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
          return view("homepage");
        }

    }



function allusers(){

}












}
