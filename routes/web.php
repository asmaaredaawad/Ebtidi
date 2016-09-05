<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');


Route::resource("categories","CategoryController"); // Add this line in routes.php

Route::resource("products","ProductController"); // Add this line in routes.php

// request for ajax
Route::post('/addproduct',"ProductController@addproduct");
Route::post('/deleteproduct',"ProductController@deleteproduct");
Route::post('/editproduct',"ProductController@editproduct");
