<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    public function all_users() //計算
    {
       $count_users = DB::table('users')->count(); //搜尋所有會員

       $count_tenants = DB::table('users')->where('level', 1)->where('verify', 1)->count(); //搜尋房客總數(已審核)

       $count_landlords = DB::table('users')->where('level', 2)->where('verify', 1)->count(); //搜尋房東總數(已審核)

       $count_houses = DB::table('houses')->count(); //搜尋總房數

       $count_nopass_tenants = DB::table('users')->where('level', 1)->where('verify', 0)->count(); //搜尋未審核的房客(已寄信)

        $data = collect([$count_users, $count_tenants, $count_landlords, $count_houses, $count_nopass_tenants]);

        return redirect('/admin')->with('all_count_data',$data);

    }
}
