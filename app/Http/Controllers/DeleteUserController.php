<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class DeleteUserController extends Controller
{
    function delete($id){
      $data=User::find($id);
      $data->delete();
      return redirect()->back();
    }
}
