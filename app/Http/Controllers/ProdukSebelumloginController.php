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
      
        $kategoriId = $request->input('kategori'); 
    
        // Query produk dengan join dan filter kategori
        $data_produk = Produk::join('kategoriproduk', 'kategoriproduk.id', '=', 'produk.id_kategori')
            ->select('produk.*', 'kategoriproduk.nama_kategori', 'kategoriproduk.id as kategori_id')
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
           
            'data_kategori' => $data_kategori,
            'data_setting' => $data_setting,
            'selected_kategori' => $kategoriId
        ];
      
        return view('produksebelumlogin', $data);
    }
}
