<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function home()
    {
        return view("rayfatech/dashboard.home", [
            "title" => "|| Beranda"
        ]);
    }

    public function catalog()
    {
        return view("rayfatech/dashboard.catalog", [
            "title" => "|| Katalog"
        ]);
    }

    public function cart()
    {
        return view("rayfatech/dashboard.cart", [
            "title" => "|| Keranjang"
        ]);
    }

    public function shop()
    {
        return view("rayfatech/dashboard.shop", [
            "title" => "|| Pesanan"
        ]);
    }
}
