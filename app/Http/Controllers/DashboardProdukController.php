<?php
namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Produk;
use App\Models\Setting;
use App\Models\Kategoriproduk; // Pastikan model Kategori ada
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardProdukController extends Controller
{
    public function dashboardproduk(Request $request)
    {
        $customer = Auth::guard('customer')->user(); // Ambil data customer yang sedang login
        $search = $request->input('search');
        $kategoriId = $request->input('kategori'); // Ambil input kategori jika ada

        // Query produk dengan filter pencarian dan kategori
        $data_produk = Produk::join('kategoriproduk', 'kategoriproduk.id', '=', 'produk.id_kategori')
            ->select('produk.*', 'kategoriproduk.nama_kategori')
            ->when($search, function ($query) use ($search) {
                return $query->where('produk.nama_produk', 'like', '%' . $search . '%');
            })
            ->when($kategoriId, function ($query) use ($kategoriId) {
                return $query->where('produk.id_kategori', $kategoriId);
            })
            ->get();

        // Ambil data kategori dan setting
        $data_kategori = Kategoriproduk::all();
        $data_setting = Setting::all();
        
        // Data yang akan dikirim ke tampilan
        $data = [
            'title' => 'Our Products',
            'data_produk' => $data_produk,
            'customer' => $customer,
            'data_kategori' => $data_kategori,
            'data_setting' => $data_setting,
        ];
        
        return view('dashboardproduk', $data);
    }

    public function search(Request $request)
    {
        $customer = Auth::guard('customer')->user();
        $searchTerm = $request->input('query');
        $kategoriId = $request->input('kategori'); // Filter kategori

        $data_produk = Produk::join('kategoriproduk', 'kategoriproduk.id', '=', 'produk.id_kategori')
        ->select('produk.*', 'kategoriproduk.nama_kategori')
        ->where('produk.nama_produk', 'like', '%' . $searchTerm . '%')
        ->when($kategoriId, function ($query) use ($kategoriId) {
            return $query->where('produk.id_kategori', $kategoriId);
        })
        ->get();
        
        $data_kategori = Kategoriproduk::all();
        $data_setting = Setting::all();
        
        return view('dashboardproduk', [
            'title' => 'Our Products',
            'data_produk' => $data_produk,
            'customer' => $customer,
            'data_kategori' => $data_kategori,
            'data_setting' => $data_setting
        ]);
    }
}
