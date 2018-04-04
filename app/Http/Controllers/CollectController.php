<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Collect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class CollectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (session('login')){
            foreach(session('login') as $login){
                $account = $login->account;
            }
        }

        $compare = DB::table('collects')
            ->join('users', 'users.user_id', '=', 'collects.user_id')
            ->join('houses', 'houses.house_id', '=', 'collects.house_id')
            ->select('collects.*', 'users.account', 'houses.housename', 'houses.housename', 'houses.housetype', 'houses.ping', 'houses.house_age', 'houses.deposit', 'houses.pet', 'houses.opened', 'houses.elevator', 'houses.parking_spaces', 'houses.balcony')
            ->where('users.account', '=', $account)
            ->limit(5)
            ->get();


        if(count($compare)>0 ) {
            Session::put('compare', $compare);
            $compare = Session::get('compare');
            Session::reflash();

            return view('compare.lists')->with('compare', $compare);
            // redirect()->action('CollectController@lists')->with('compare', $compare);
        }
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
        $house_id = $request->house_id;

        if (session('login')){
            foreach(session('login') as $login){
                $user_id = $login->user_id;
            }
        }

        Collect::create([
            'house_id'=>$house_id,
            'user_id'=>$user_id,
        ]);

        Session::reflash();
        return redirect()->action('HouseController@show', ['house_id' => $house_id , 'user_id' => $user_id]);


        //return redirect('house_info/{house_id}')->with('success_collect_house','成功收藏房屋')->with('house_id',$house_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($collect_id)
    {
        if (session('login')){
            foreach(session('login') as $login){
                $account = $login->account;
            }
        }
        Collect::where('collect_id', '=', $collect_id)->delete();
        return redirect()->route('collect.compare.index')->with('account',$account);
    }
}
