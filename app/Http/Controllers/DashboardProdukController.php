<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Produk;
use App\Models\Setting;
use App\Models\kategoriproduk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardProdukController extends Controller
{
    public function dashboardproduk(Request $request)
    {
        $customer = Auth::guard('customer')->user();
        $search = $request->input('search');
        $kategoriId = $request->input('kategori');

        // Modified query to include pagination
        $data_produk = Produk::join('kategoriproduk', 'kategoriproduk.id', '=', 'produk.id_kategori')
            ->select('produk.*', 'kategoriproduk.nama_kategori', 'kategoriproduk.id as kategori_id')
            ->when($search, function ($query) use ($search) {
                return $query->where('produk.nama_produk', 'like', '%' . $search . '%');
            })
            ->when($kategoriId, function ($query) use ($kategoriId) {
                return $query->where('produk.id_kategori', $kategoriId);
            })
            ->paginate(8); // Add pagination with 8 items per page

        $data_kategori = kategoriproduk::all();
        $data_setting = Setting::all();
        $selectedCategory = $data_kategori->where('id', $kategoriId)->first();

        return view('customer.dashboardproduk', [
            'title' => 'Our Products',
            'data_produk' => $data_produk,
            'customer' => $customer,
            'data_kategori' => $data_kategori,
            'data_setting' => $data_setting,
            'selected_kategori' => $kategoriId,
            'search' => $search,
            'selectedCategory' => $selectedCategory
        ]);
    }
}
