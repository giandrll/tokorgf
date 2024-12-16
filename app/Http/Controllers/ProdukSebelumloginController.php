<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Setting;
use App\Models\Kategoriproduk; // Pastikan model Kategori ada
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProdukSebelumloginController extends Controller
{
    public function produksebelumlogin(Request $request)
    {
        $kategoriId = $request->input('kategori'); // Ambil input kategori jika ada

        // Ambil semua kategori
        $data_kategori = Kategoriproduk::all();
        
        if ($kategoriId) {
            $data_produk = Produk::where('id_kategori', $kategoriId)->get(); // Filter produk berdasarkan kategori
        } else {
            $data_produk = Produk::all(); // Ambil semua produk jika tidak ada kategori yang dipilih
        }

        // Ambil data setting
        $data_setting = Setting::all();

        // Data yang akan dikirim ke tampilan
        $data = [
            'title' => 'Our Products',
            'data_produk' => $data_produk,
            'data_kategori' => $data_kategori,
            'data_setting' => $data_setting,
            'selected_kategori_id' => $kategoriId, // Untuk memeriksa kategori yang dipilih di tampilan
        ];

        return view('produksebelumlogin', $data);
    }
}
