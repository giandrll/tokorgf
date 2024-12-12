<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\KategoriProduk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    // Method untuk menampilkan halaman produk
    public function index()
    {
        $data = [
            'title' => 'Data Produk',
            'data_kategori' => KategoriProduk::all(),
            'data_produk' => Produk::join('kategoriproduk', 'kategoriproduk.id', '=', 'produk.id_kategori')
                ->select('produk.*', 'kategoriproduk.nama_kategori')
                ->get(),
        ];
        return view('admin.dashboardadmin.produk', $data);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_produk' => 'required',
            'id_kategori' => 'required',
            'harga' => 'required|numeric',
            'stok' => 'required|numeric',
            'size' => 'required|array',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'deskripsi' => 'required',
        ]);

        $validatedData['size'] = implode(',', $validatedData['size']);

        if ($request->hasFile('foto')) {
            $image = $request->file('foto');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('foto/fotoproduk'), $imageName);
            $validatedData['foto'] = $imageName;
        }

        Produk::create($validatedData);

        return redirect('/produk')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nama_produk' => 'required',
            'id_kategori' => 'required',
            'harga' => 'required|numeric',
            'stok' => 'required|numeric',
            'size' => 'required|array',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'deskripsi' => 'required',
        ]);

        $validatedData['size'] = implode(',', $validatedData['size']);

        $produk = Produk::findOrFail($id);

        if ($request->hasFile('foto')) {
            $image = $request->file('foto');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('foto/fotoproduk'), $imageName);
            $validatedData['foto'] = $imageName;

            if ($produk->foto) {
                $oldImagePath = public_path('foto/fotoproduk/' . $produk->foto);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }
        }

        $produk->update($validatedData);

        return redirect('/produk')->with('success', 'Data Berhasil Di Ubah');
    }

    public function destroy($id)
    {
        $produk = Produk::findOrFail($id);
        if ($produk->foto) {
            $oldImagePath = public_path('foto/fotoproduk/' . $produk->foto);
            if (file_exists($oldImagePath)) {
                unlink($oldImagePath);
            }
        }
        $produk->delete();

        return redirect('/produk')->with('success', 'Data Berhasil Dihapus');
    }
}

