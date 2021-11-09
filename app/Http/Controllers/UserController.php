<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    //
    function users(){
      $data=User::all();
      return view("admin.adminusers",["datas"=>$data]);
    }
}
