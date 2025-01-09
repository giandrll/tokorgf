<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;
use App\Models\kategoriproduk;

class KategoriProdukController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Data Kategori Produk',
            'data_kategori' => kategoriproduk::all(),
            'data_setting' => Setting::all(),
        ];
        return view('admin.dashboardadmin.kategoriproduk', $data);
    }

    public function store(Request $request)
    {
       kategoriproduk::create([
        'nama_kategori' => $request->nama_kategori,
       ]);
       return redirect('/kategoriproduk')->with('success', 'Data Berhasil Di Ubah');
    }

    public function update(Request $request,$id)
{
        kategoriproduk::where('id', $id)
        ->where('id', $id)
        ->update([
         'nama_kategori' => $request->nama_kategori,
        ]);
        return redirect('/kategoriproduk')->with('success', 'Data Berhasil Di Ubah');
        }
    

        public function destroy($id)
        {
            $kategoriproduk = kategoriproduk::find($id);
            if ($kategoriproduk) {
                $kategoriproduk->delete();
                return redirect('/kategoriproduk')->with('success', 'Data berhasil dihapus');
            } else {
                return redirect('/kategoriproduk')->with('error', 'User tidak ditemukan');
            }
        }
}