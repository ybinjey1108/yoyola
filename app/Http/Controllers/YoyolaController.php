<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Member;
use DB;
class YoyolaController extends Controller
{
    public function index() //首頁
    {
        return view('Yoyola.index');
    }
    public function login() //登入頁
    {
        return view('Yoyola.login');
    }
    public function sign() //註冊頁
    {
        return view('Yoyola.sign');
    }
//登入驗證//
    public function logincheck(Request $request)
    {
        $members = DB::table('members')
        ->where('email', '=', $request->email) //是否有此帳號
            ->where('password', '=', Hash::check('plain-text', $request->password)) //密碼是否正確
        ->first();
        if($members != null){ //有取得資料時導入首頁
            $request->session()->put('member_id',$members->member_id); //設定session
            $request->session()->put('name',$members->name); //設定session
            //取session值
            // $data = $request->session()->get('member_id');
            // return $data;
            return redirect('yoyola');
        }else{ //沒取得資料時倒回Login並顯示警告標示
            return redirect('yoyola/login')->withErrors(['fail'=>'Email or password is wrong!']);
        }
    }
//登入驗證//
//登出//
    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect('yoyola');
    }
//登出//
//註冊驗證//
    public function signcheck(Request $request)
    {
        $validated = $request->validate([
            'email' => ['required', 'string', 'email', 'max:255', 'unique:members'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
            'name' => ['required'],
            'phone' => ['required'],
        ]);
        
        $sign = Member::create([
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'name' => $request->name,
            'phone' => $request->phone,
        ]);
        echo "<script language=\"JavaScript\">alert(\"註冊成功\");</script>";
        return redirect('yoyola/login');     
    }
//註冊驗證//


}
