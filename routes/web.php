<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::prefix("admin")->middleware("auth")->namespace('App\Http\Controllers')->group(function (){

    Route::resource("post" , "PostController")->except(["show",""]);
    Route::resource("media" , "MediaController")->except(["create" , "show","edit","update"]);
    Route::resource("categories" , "CategoryController")->except(["create","show","edit","update"]);


    Route::get("/",[\App\Http\Controllers\HomeController::class , "index"])->name("home");
    Route::get("/profile",[\App\Http\Controllers\HomeController::class , "profile"])->name("profile");
    Route::post("/profile",[\App\Http\Controllers\HomeController::class , "editProfile"])->name("profile");


});
Auth::routes();

