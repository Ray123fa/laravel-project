<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegistController extends Controller
{
	public function create()
	{
		return view('rayfatech/auth.register');
	}

	public function store(Request $req)
	{
		$data = $req->validate([
			'name' => 'required|max:100',
			'username' => ['required', 'min:5', 'max:20', 'unique:users'],
			'email' => 'required|email:dns|unique:users',
			'password' => 'required|min:8|max:100'
		]);
		$data['password'] = Hash::make($data['password']);

		User::create($data);

		return redirect('/rayfatech/login')->with('success', 'Registrasi berhasil! Silakan login');
	}
}
