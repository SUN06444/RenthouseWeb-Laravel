<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'account'=> 'admin',
            'password'=> md5('12345'),
            'name'=>'管理人員',
            'email'=>"renthouse104@gmail.com",
            'verify'=>"0",
            'level'=>"3",
            'status'=>"0"
        ]);
        User::create([
            'account'=> 'aaaaa',
            'password'=> md5('12345'),
            'name'=>'房東a',
            'email'=>"aaaaa@gmail.com",
            'verify'=>"1",
            'level'=>"2",
            'status'=>"4"
        ]);
    }
}
