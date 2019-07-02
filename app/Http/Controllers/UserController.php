<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class UserController extends Controller
{
    public function manage_users()
    {
        $users = User::where('id','<>',Auth::user()->id)->get();
        return view('manage_users', ['users'=>$users]);
    }
}
