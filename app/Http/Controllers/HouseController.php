<?php

namespace App\Http\Controllers;

use App\User;
use App\House;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class HouseController extends Controller
{
    public function index($house_id)
    {

        $house = DB::table('houses')->where('house_id', '=', $house_id)->first();
        $click_num = $house->click;
        House::where('house_id', '=', $house_id)->update(['click' => $click_num+1]);

        $house_info = DB::table('houses')
            ->where('house_id', '=', $house_id)->get();
        Session::put('house_info', $house_info);
        $house_info = Session::get('house_info');
        Session::reflash();
        return view('house.lists')->with('house_info', $house_info);
        //return redirect('house/lists')->with('house_info', $house_info);
    }

    public function show($house_id,$user_id)
    {

        $house = DB::table('houses')->where('house_id', '=', $house_id)->first();
        $click_num = $house->click;
        House::where('house_id', '=', $house_id)->update(['click' => $click_num+1]);

        $house_info = DB::table('houses')
            ->where('house_id', '=', $house_id)->get();
        Session::put('house_info', $house_info);
        $house_info = Session::get('house_info');

        $login=DB::table('users')->where('user_id', $user_id)->get();
        Session::put('login', $login);
        $login = Session::get('login');

        $check_collect = DB::table('collects')
            ->where('user_id',$user_id)->where('house_id',$house_id)->get();
        Session::put('check_collect', $check_collect);
        $check_collect = Session::get('check_collect');


        Session::reflash();

        return view('house.lists')->with('house_info', $house_info)->with('login', $login)->with('check_collect', $check_collect);

    }

    public function update($user_id,$house_id)
    {

         User::where('user_id', '=', $user_id)->update(['status' => 4 ]);
         House::where('house_id', '=', $house_id)->update(['verify' => 1]);
            $message = "審核房屋成功";
        return redirect('admin/lists/2')->with('message',$message);

    }
}
