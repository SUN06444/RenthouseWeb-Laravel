<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function getmail($user_id)
    {

        User::where('user_id', '=', $user_id)->update(['verify' => '1']);
        return redirect('index')->with('verify_ok','審核成功');
    }
}
