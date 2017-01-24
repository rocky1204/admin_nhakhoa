<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\login_request;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
class admin_controller extends help_controller
{
    //
public function login()
{
    return view('pages.login');
}
public function post_login(login_request $login_request)
{
echo $login_request->username;
echo '123';
//return view('pages.login');
}
public function trangchao()
{
    return view('pages.trang_chao');
}
}
