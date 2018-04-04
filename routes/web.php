<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//首頁
//Route::get('index', ['as' => 'index', 'uses' => 'AuthController@show'])->name('index');

//首頁
Route::group(['prefix' => 'index'], function() {

    Route::get('/',  'AuthController@index')->name('index'); //首頁

    Route::get('/{num}',  'AuthController@show')->name('index'); //(熱門瀏覽、收藏)

});


Route::group(['prefix' => 'auth'], function() {

    //註冊
    Route::group(['prefix' => 'register'], function()
    {
        Route::get('/lists', 'Auth\RegisterController@index');//註冊入口

        Route::get('{val_id}', 'Auth\RegisterController@show'); //判斷註冊的身分

        Route::post('create_tenant', 'Auth\RegisterController@store_tenant'); //註冊房客(含寄信)

        Route::post('create_landlord', 'Auth\RegisterController@store_landlord'); //註冊房東
    });

    //登入
    Route::group(['prefix' => 'login'], function()
    {
        Route::get('/lists', 'Auth\LoginController@index');  //登入入口

        Route::get('{val_id}', 'Auth\LoginController@show'); //判斷登入的身分

        Route::post('/find', 'Auth\LoginController@login'); //登入房客

        //錯誤訊息
        Route::get('{val_id}/error', 'Auth\LoginController@login_one_error'); //登入失敗1次

        Route::get('{val_id}/error/error', 'Auth\LoginController@login_two_error'); //登入失敗2次

        Route::get('{val_id}/error/error/error', 'Auth\LoginController@login_three_error'); //登入失敗3次

        Route::get('{val_id}/error/error/error/error', 'Auth\LoginController@login_over_three_error'); //登入失敗超過3次
    });

});

Route::get('/getmail/{user_id}',  'MailController@getmail');//收到使用者確認信件(並開通身分)

//登出
Route::get('/logout', ['as' => 'logout', 'uses' => 'AuthController@logout']);

//房東 - 刊登房屋 - view &&  刊登房屋
Route::group(['prefix' => 'publish'], function() {

    Route::get('/lists',  'PublishHouseController@index')->name('publish_step_one'); //刊登房屋(step1 - 填寫房東資料)

    Route::get('/create',  'PublishHouseController@create')->name('publish_step_two'); //刊登房屋(step2 - 填寫房屋詳細資訊)

    Route::post('/add', 'PublishHouseController@store'); //建立房東資料(step1)

    Route::post('/create', 'PublishHouseController@show'); //建立房屋資料(step2)

});

//顯示房屋資訊
Route::group(['prefix' => 'house'], function() {

    Route::get('/{house_id}', 'HouseController@index'); //判斷使用者點擊的hosue_id後，去顯示房屋詳細資訊

    Route::get('/{house_id}/{user_id}','HouseController@show');//會員登入判斷id去收藏房屋

});

//收藏、比較房屋
Route::group(['prefix' => 'collect'], function() {

    Route::post('/add', 'CollectController@store'); //會員收藏房屋

    Route::group(['prefix' => 'compare'], function() {

        Route::get('/lists', 'CollectController@index')->name('collect.compare.index'); //顯示房屋比較表

        Route::delete('/delete/{collect_id}', 'CollectController@destroy'); //刪除房屋收藏

    });
});

//後台部分
Route::group(['prefix' => 'admin'], function() {

    Route::get('/', 'AdminController@index'); //後台

    Route::get('/index', 'SearchController@all_users'); //查詢計算人數資料

    Route::get('/lists/{level}', 'AdminController@show'); //審核房東、房客

    Route::get('/verify/{user_id}', 'AdminController@update'); //房客刊登的房屋資訊管理

    Route::get('/pass/{user_id}/{house_id}', 'HouseController@update'); //房客刊登的房屋資訊管理

    Route::post('/find', 'AdminController@login'); //管理人員登入

});





