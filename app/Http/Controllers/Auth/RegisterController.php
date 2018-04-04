<?php

namespace App\Http\Controllers\Auth;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;

class RegisterController extends Controller
{
    public static function index(){ //註冊入口(身分選擇)
        return view('auth.register_entrance');
    }

    public static function show($val_id){ //顯示註冊頁面(依身分顯示不同註冊須知)
        return view('auth.register' ,compact('val_id'));
    }

    public function store_tenant(Request  $request) //註冊房客
    {
        $account = $request->account;
        $password = $request->password;
        User::create([
            'account'=>$account,
            'password'=>md5($password),
            'name'=>$request->name,
            'email'=>$request->email,
            'verify'=>'0',
            'level'=>'1',
            'status'=>'0'

        ]);

        $user = DB::table('users')
            ->where('account', '=', $account)->get();

        foreach( $user as $data) {
            $user_id = $data->user_id;
        }

        Mail::raw('請至本網址，即可完成學生身分認證-> http://localhost:8000/getmail/'.$user_id, function ($message) use ($user){
            foreach( $user as $data){
                $message->to($data->email, $data->name)->subject('註冊租屋網會員通知');
            }
        });

        return redirect('index')->with('WaitForMail','請確認信件')->with('user_data',$user);
    }

    public function store_landlord(Request  $request) //註冊房東
    {
        $account = $request->account;
        $password = $request->password;
        User::create([
            'account'=>$account,
            'password'=>md5($password),
            'name'=>$request->name,
            'email'=>$request->email,
            'verify'=>'1',
            'level'=>'2',
            'status'=>'1'

        ]);

        return redirect('index')->with('landlord_msg','房東註冊成功');
    }
}
