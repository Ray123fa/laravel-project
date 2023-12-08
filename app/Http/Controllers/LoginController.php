<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
	public function index()
	{
		return view('rayfatech/auth.login');
	}

	public function auth(Request $req)
	{
		$credentials = $req->validate([
			'username' => ['required', 'min:5', 'max:20'],
			'password' => 'required|min:8|max:100'
		]);

		if (Auth::attempt($credentials)) {
			$req->session()->regenerate();
			return redirect()->intended("rayfatech/dashboard");
		}

		return back()->with('error', 'Username atau password tidak sesuai!');
	}
}
