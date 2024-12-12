<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\setting;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
  
    public function index()
    {
        $data_produk = Produk::all(); // Fetch all products
        $data_setting = setting::all();
        return view('dashboard', compact('data_produk', 'data_setting'));
    }

    public function index2(){
        return view('admin.auth_admin.authadmin');
    }
    public function index3(){
        return view('customer.auth_customer.authcustomer');
    }
}

