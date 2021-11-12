<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DeleteUserController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\ChefController;
use App\Http\Controllers\PlaceOrder;



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get("/",[HomePageController::class,"index"]);
Route::get("redirects",[HomePageController::class,"redirect"]);
Route::get("users",[UserController::class,"users"]);
Route::get("/data/{id}",[DeleteUserController::class,"delete"]);
Route::get("/foodmenu",[FoodController::class,"foodmenu"]);
Route::post("/addfood",[FoodController::class,"addfood"]);
Route::get("/fooddelete/{id}",[FoodController::class,"deletemenu"]);
Route::get("/foodupdate/{id}",[FoodController::class,"updatemenu"]);
Route::get("/updatedata/{id}",[FoodController::class,"updateindb"]);
Route::get("/reservationdata",[ReservationController::class,"reservationdata"]);
Route::get("/reservationform",[ReservationController::class,"reservationform"]);
Route::get("/chefs",[ChefController::class,"chefs"]);
Route::post("/addchef",[ChefController::class,"chefadd"]);
Route::get("/chefdelete/{id}",[ChefController::class,"chefdelete"]);
Route::get("/chefupdate/{id}",[ChefController::class,"chefupdate"]);
Route::get("/updatechefdata/{id}",[ChefController::class,"updatechefdata"]);
Route::post("/addcart/{id}",[CartController::class,"addtocart"]);
Route::get("/showcart/{id}",[CartController::class,"showcart"]);
Route::post("/delete/{id}",[CartController::class,"deleteitem"]);
Route::get("/placeorder",[PlaceOrder::class,"placeorder"]);
Route::get("/orders",[PlaceOrder::class,"vieworder"]);
