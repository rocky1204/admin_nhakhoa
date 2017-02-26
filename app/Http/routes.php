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

Route::get('trang-chu',
    ['as' => 'trang-chu', 'uses' => 'admin_controller@login']);
Route::post('/trang-chu',[
    "as"=>"post_login",
    "uses"=>"admin_controller@post_login",
]);
Route::get('/dang-xuat','admin_controller@dang_xuat');
Route::get('/','admin_controller@trangchao');
Route::get('/danh-muc-tin','admin_controller@danhmuc');
//Route::get('/danh-sach-tin-tuc','admin_controller@danhsachtintuc');
Route::get('/{alias}/', 'admin_controller@giao_dien_menu');
Route::post('/danh-sach-san-pham/', ['as' => 'post_xoa_tin_tuc', 'uses' => 'admin_controller@xoa_tin_tuc']);

