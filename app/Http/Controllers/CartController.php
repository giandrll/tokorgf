<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Produk;
use App\Models\setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class CartController extends Controller
{ 
    public function index()
    {
        $customer = Auth::guard('customer')->user();
    
        if ($customer) {
            // Mengambil item keranjang berdasarkan customer_id
            $cartItems = Cart::where('customer_id', $customer->id)->with('produk')->get();
            $data_setting = setting::all();
            // Mengirim data $customer ke view
            return view('cart', compact('cartItems', 'customer', 'data_setting'));
        } else {
            return redirect()->route('login')->with('error', 'Anda harus login sebagai customer.');
        }
    }
    

    public function store(Request $request)
    {
        try {
            $customer = Auth::guard('customer')->user();
            
            if (!$customer) {
                return response()->json([
                    'success' => false,
                    'message' => 'Anda harus login terlebih dahulu.',
                    'redirect' => route('login')
                ], 401);
            }
    
            // Validasi input
            $validator = Validator::make($request->all(), [
                'jumlah' => 'required|integer|min:1',
                'size' => 'required',
            ]);
    
            if ($validator->fails()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Validasi gagal',
                    'errors' => $validator->errors()
                ], 422);
            }
    
            // Cek apakah produk dengan ukuran yang sama sudah ada di keranjang
            $cartItem = Cart::where('customer_id', $customer->id)
                            ->where('id_produk', $request->id_produk)
                            ->where('size', $request->size)
                            ->first();
    
            if ($cartItem) {
                // Jika sudah ada di keranjang, tambahkan jumlahnya
                $cartItem->jumlah += $request->jumlah;
                $cartItem->save();
            } else {
                // Jika belum ada, tambahkan produk baru
                Cart::create([
                    'customer_id' => $customer->id,
                    'id_produk' => $request->id_produk,
                    'jumlah' => $request->jumlah,
                    'size' => $request->size,
                ]);
            }
    
            return response()->json([
                'success' => true,
                'message' => 'Produk berhasil ditambahkan ke keranjang!'
            ]);
    
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Terjadi kesalahan saat menambahkan ke keranjang.',
                'error' => $e->getMessage()
            ], 500);
        }
    }
    
    public function destroy($id)
    {
        $customer = Auth::guard('customer')->user();
    
        if ($customer) {
            // Cari item keranjang berdasarkan ID dan customer_id
            $cartItem = Cart::where('id', $id)
                ->where('customer_id', $customer->id)
                ->first();
    
            if ($cartItem) {
                $cartItem->delete();
                return redirect()->route('cart.index')->with('success', 'Produk berhasil dihapus dari keranjang!');
            } else {
                return redirect()->route('cart.index')->with('error', 'Produk tidak ditemukan di keranjang Anda.');
            }
        } else {
            return redirect()->route('login')->with('error', 'Anda harus login sebagai customer.');
        }
    }
    
}
