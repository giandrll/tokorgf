<?php 
namespace App\Http\Controllers;  

use App\Models\Customer; 
use App\Models\Produk; 
use App\Models\Setting; 
use App\Models\Kategoriproduk; 
use Illuminate\Http\Request; 
use Illuminate\Support\Facades\Auth;  

class DashboardProdukController extends Controller 
{     

        public function dashboardproduk(Request $request)
        {
            $customer = Auth::guard('customer')->user();
            $search = $request->input('search'); // Parameter pencarian
            $kategoriId = $request->input('kategori'); // Parameter kategori
    
            // Query produk dengan filter berdasarkan search dan kategori
            $data_produk = Produk::join('kategoriproduk', 'kategoriproduk.id', '=', 'produk.id_kategori')
                ->select('produk.*', 'kategoriproduk.nama_kategori', 'kategoriproduk.id as kategori_id')
                ->when($search, function ($query) use ($search) {
                    return $query->where('produk.nama_produk', 'like', '%' . $search . '%');
                })
                ->when($kategoriId, function ($query) use ($kategoriId) {
                    return $query->where('produk.id_kategori', $kategoriId);
                })
                ->get();
    
            // Ambil data kategori untuk sidebar
            $data_kategori = Kategoriproduk::all();
            $data_setting = Setting::all();
    
            // Ambil nama kategori yang dipilih
            $selectedCategory = $data_kategori->where('id', $kategoriId)->first();
    
            return view('dashboardproduk', [
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
    