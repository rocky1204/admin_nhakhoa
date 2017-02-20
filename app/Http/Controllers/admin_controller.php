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
//echo $login_request->username;
//echo '123';
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
 public function dang_xuat()
    {
        Session::flush();
        return redirect()->route('trang-chu');//redirect den route admin o file route
    }
public function trangchao()
{
    return view('pages.trang_chao');
}
public function danhmuc()
{
    return view('pages.danh_muc');
}
public function danhsachtintuc()
{
    return view('pages.danh_sach_tin_tuc');
}
public function giao_dien_menu($alias)
{
    if ($alias == 'danh-sach-tin-tuc')
    {
        $ds_item = DB::table('tin_tuc')->select('tin_tuc.TitleVn','tin_tuc.NewsID','categories.NameVn')->join('categories','categories.CategoryID','=','tin_tuc.CategoryID')->paginate(10);
        if($ds_item)
        {
            $ds_item->setpath("$alias");
        }
    }
    return view('pages.danh_sach_tin_tuc')
    ->with('user_profile',Session::get('userprofile'))
    ->with('alias',$alias)
    ->with('ds_item',$ds_item);
}
   public function xoa_tin_tuc(Request $request)
    {
        print_r($_POST);
        $ds_xoa = $request->input('thao_tac');
        DB::table('tin_tuc')->whereIn('NewsID', $ds_xoa)->delete();
        return redirect(url('/')."/danh-sach-tin-tuc");
        print_r($ds_xoa);
    }
}
