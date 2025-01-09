<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    // Fungsi untuk menampilkan profil customer
    public function profile()
    {
        $customer = Auth::guard('customer')->user();
        $data_setting = Setting::all();
        return view('customer.profile', compact('customer','data_setting'));
    }

    // Fungsi untuk mengupdate profil
    public function updateProfile(Request $request)
    {
        $customer = Auth::guard('customer')->user();

        // Validasi data input
        $request->validate([
            'nama' => 'required|string|max:255',
            'no_telpon' => 'required|string|max:15',
            'email' => 'required|email|unique:customer,email,' . $customer->id,
            'alamat' => 'required|string|max:255',
        ]);

        // Update data customer
        $customer->nama = $request->nama;
        $customer->no_telpon = $request->no_telpon;
        $customer->email = $request->email;
        $customer->alamat = $request->alamat;

        // Update password jika ada input password
        if ($request->filled('password')) {
            $request->validate([
                'password' => 'required|string|min:8|confirmed',
            ]);
            $customer->password = Hash::make($request->password);
        }

        // Simpan perubahan pada database
        $customer->save();

        // Redirect kembali ke halaman profil dengan pesan sukses
        return redirect()->back()->with('success', 'Profile updated successfully.');
    }

    // Fungsi baru untuk mengupdate foto profil
    public function updatePhoto(Request $request)
    {
        $request->validate([
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $customer = Auth::guard('customer')->user();

        if ($request->hasFile('foto')) {
            // Hapus foto lama jika ada
            if ($customer->foto && Storage::exists('public/customer_photos/' . $customer->foto)) {
                Storage::delete('public/customer_photos/' . $customer->foto);
            }

            // Simpan foto baru
            $file = $request->file('foto');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/customer_photos', $filename);
            $customer->foto = $filename;
            $customer->save();

            return response()->json(['success' => true]);
        }

        return response()->json(['success' => false]);
    }
}