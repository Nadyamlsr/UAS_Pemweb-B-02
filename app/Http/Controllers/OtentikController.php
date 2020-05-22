<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\model\UsersModel;

class OtentikController extends Controller
{

	public function index()
	{
		return view('login');
	}

    public function masuk(Request $request)
    {
    	$credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            $users = UsersModel::select('role')->where('email', $request->email)->get();
            foreach ($users as $key) {
                # code...
                session(['role'=> $key->role]);
            }
            return redirect()->intended('dashboard');
        }
    }

    public function keluar()
    {
    	session()->flush();
    	return redirect()->intended('home');
    }
}
