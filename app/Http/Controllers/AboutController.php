<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{
    public function about()
    {

        $customer = Auth::guard('customer')->user(); // Mendapatkan data customer yang sedang login
        $data_setting = Setting::all(); 
        return view('customer.about', compact('customer','data_setting')); // Mengirimkan data customer ke view profil
    }
}