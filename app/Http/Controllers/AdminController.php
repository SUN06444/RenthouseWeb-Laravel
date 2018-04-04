<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Redirect;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('admin.index');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    public function login(Request $request)
    {
        $account = $request->account;
        $password = $request->password;

        $login=DB::table('users')->where('account',$account)->where('password', md5($password))->where('level', 3)->get();

        if(count($login)>0 ) {
            Session::put('login', $login);
            $login = Session::get('login');
            Session::reflash();

            return redirect('admin/index')->with('login', $login);

        }else{

            return redirect(url()->previous().'/error');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($level)
    {
        if($level == 1){
            $data = DB::table('users')->where('level',$level)->get();
            return view('admin.verify_tenant',compact('data'))->with('number','1');
        }elseif ($level == 2){
            $data = DB::table('users')->where('level',$level)->get();
            //$house_data = DB::table('houses')
            //    ->join('users',  'users.user_id', '=', 'houses.user_id')
            //    ->selectRaw( '*, houses.user_id  AS house_user_id, users.user_id, count(users.user_id) AS num')
            //    ->groupBy('house_user_id')
            //    ->get();
            //return $house_data;
            return view('admin.verify_landlord',compact('data'))->with('number','1');

        }


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($user_id)
    {
        $verify_house_data = DB::table('houses')->where('user_id' , '=' , $user_id)->get();

        return view('admin.verify_house',compact('verify_house_data'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
