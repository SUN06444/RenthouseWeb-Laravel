<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;


class AuthController extends Controller
{
    public function index()
    {
        $houses = DB::table('houses')->where('verify','1')->orderBy('house_id', 'desc')->Paginate(6);

        return view ('index',['houses' => $houses]);
    }

    public function show($num)
    {

        if($num == 2){
            $houses = DB::table('houses')->orderBy('click', 'desc')->Paginate(6);
        }elseif ($num == 3){
            $houses = DB::table('houses')->orderBy('house_id', 'desc')->Paginate(6);
        }else{
            $houses = DB::table('houses')->orderBy('house_id', 'desc')->Paginate(6);
        }

        return view ('index',['houses' => $houses]);
    }

    public function logout()
    {
        Session::flush();
        return Redirect::to('index');
    }
}
