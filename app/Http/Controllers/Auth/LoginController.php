<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public static function index(){ //登入入口(身分選擇)
        return view('auth.login_entrance');
    }

    public static function show($val_id){
        return view('auth.login' ,compact('val_id')); //顯示登入頁面
    }

    public function login(Request  $request)
    {
        $account = $request->account;
        $password = $request->password;

        $login=DB::table('users')->where('account',$account)->where( 'password', md5($password))->where( 'verify', 1)->get();

        if(count($login)>0 ) {
            Session::put('login', $login);
            $login = Session::get('login');
            Session::reflash();

            return redirect('index')->with('login', $login);

        }else{

            return redirect(url()->previous().'/error');
        }

    }

    public static function login_one_error($val_id){
        $error = '帳號密碼錯誤，或者身分尚未審核成功！';
        return view('auth.login' ,compact('val_id','error')); //輸入帳密錯誤(以輸入1次)
    }
    public static function login_two_error($val_id){
        $error = '帳號密碼錯誤，或者身分尚未審核成功，剩2次機會';
        return view('auth.login' ,compact('val_id','error')); //輸入帳密錯誤(以輸入2次)
    }
    public static function login_three_error($val_id){

        $error ='帳號密碼錯誤，或者身分尚未審核成功，剩最後1次機會';
        return view('auth.login' ,compact('val_id','error')); //輸入帳密錯誤(以輸入3次)
    }

    public static function login_over_three_error($val_id){
        $over_three_error = '超過三次錯誤！'.'是否尚未註冊成功？或者忘記密碼？';
        return view('index' ,compact('val_id','over_three_error')); //輸入帳密錯誤>3 ， 跳至首頁(後續須補->)
    }


}
