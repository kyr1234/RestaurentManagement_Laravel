<?php

namespace App\Http\Controllers;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class CartController extends Controller
{
    //
    function addtocart(Request $req,$id)
    {
     if(Auth::id()){

        $newdata=new Cart;

         $newdata->user_id=Auth::id();
         $newdata->quantity=$req->quantity;
         $newdata->food_id=$id;
         $newdata->save();


    return redirect()->back();
    }
    else{
        return redirect("/login");
    }

    }


function showcart($id){

    $data2=Cart::select('*')->where("user_id","=",$id)->get();

    $datas=Cart::where("user_id",$id)->join("food","carts.food_id","=","food.id")->get();
    return view("showcart",["showcart"=>$datas,"data"=>$data2]);

}


function deletecart($id)
{
    $data=Cart::find($id);
    $data->delete();
    return redirect()->back();
}



}
