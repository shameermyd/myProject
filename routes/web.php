<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get("/about",function(){
    $data = [
        "name" => "shazam",
        "address" => "Home manzil",
        "services" => ["web develop","digital marketing","web design"]
    ];

    return view("about",$data);
});

Route::get('/contact',function(){
    return view('contact');
});


//Route::get('/posts','App\Http\Controllers\PostsController@index');
Route::get('/posts/{id}','App\Http\Controllers\PostsController@index');