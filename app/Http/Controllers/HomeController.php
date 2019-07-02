<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    public function index()
    {
        if (Auth::user()->user_level == 1) {
            return redirect('manage_users');
        } else if(Auth::user()->user_level == 2) {
            return redirect('list_patients');
        } else {
            return redirect('list_patients'); //pharmacist home
        }
    }
}
