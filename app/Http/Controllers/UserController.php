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

    public function insert_user(Request $request)
	{
        $this->validate($request, [
            'first_name' => 'required',
			'last_name' => 'required',
			'contact' => 'required',
            'nic' => 'required|unique:users|min:10',
            'email' => 'required|unique:users|email',
            'user_level' => 'required',
            'password' => 'required'
        ]);
        
        User::create([
            'first_name' => $request->first_name,
			'last_name' => $request->last_name,
			'contact' => $request->contact,
            'nic' => $request->nic,
            'email' => $request->email,
            'user_level' => $request->user_level,
            'password' => bcrypt($request->password)
        ]);

        return redirect('manage_users');
    }
    
    public function delete_user($id)
    {
        User::find($id)->delete();
        return redirect('manage_users');
    }
}
