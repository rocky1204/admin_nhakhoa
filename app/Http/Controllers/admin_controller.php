<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\Http\Requests;
use App\Http\Requests\login_request;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Session;
class admin_controller extends help_controller
{
    //
public function login()
{
    if(Session::has('userprofile'))
    {
        return view('pages.quantri')->with('user_profile',Session::get('userprofile'));
    }
    else
    return view('pages.login');
}
public function post_login(login_request $login_request)
{
    $User_porfile=DB::table('sysusers')->where('Username',$login_request->get('username'))->first();
echo $login_request->username;
echo '123';
if(md5( $login_request->get('password'))==$User_porfile->Password)
{
    Session::put('userprofile',$User_porfile);
    return view('pages.quantri')->with('user_profile',Session::get('userprofile'));
}
else
{
    $thong_bao="Tài khoản hoặc mật khẩu không đúng";
return view('pages.login')->with('thong_bao',$thong_bao);
}

//return view('pages.login');
}
public function trangchao()
{
    return view('pages.trang_chao');
}
}
