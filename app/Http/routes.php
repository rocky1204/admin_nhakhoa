<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/dang-nhap','admin_controller@login');
Route::post('/dang-nhap',[
    "as"=>"post_login",
    "uses"=>"admin_controller@post_login",
]);
Route::get('/','admin_controller@trangchao');


