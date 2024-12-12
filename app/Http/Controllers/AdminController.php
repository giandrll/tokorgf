<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\DetailTransaksi;
use App\Models\Transaksi; // Pastikan ini diimpor
use Illuminate\Http\Request;    
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function hitoriTransaksi()
    {
        $customer = Auth::guard('customer')->user();

        // Fetch all the transaksi with related details for the current customer
        $transaksiGrouped = Transaksi::with(['admin', 'customer', 'details.produk'])
            ->where('customer_id', $customer->id)
            ->get();

        return view('admin.dashboardadmin.histori_transaksi', [
            'title' => 'Detail Transaksi',
            'transaksiGrouped' => $transaksiGrouped
        ]);
    }
}
