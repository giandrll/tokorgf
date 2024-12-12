<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;

class SettingController extends Controller
{
    // Tampilkan form edit setting
    public function index()
    {
        $setting = Setting::first(); // Mengambil data setting pertama
        return view('admin.dashboardadmin.setting', compact('setting'));
    }

    // Simpan perubahan setting
    public function update(Request $request)
    {
        $request->validate([
            'nama_toko' => 'required',
            'email_toko' => 'required|email',
        ]);

        $setting = Setting::first();
        if (!$setting) {
            $setting = new Setting;
        }

        $setting->nama_toko = $request->nama_toko;
        $setting->email_toko = $request->email_toko;
        $setting->telefon_toko = $request->telefon_toko;
        $setting->instagram_toko = $request->instagram_toko;
        $setting->facebook_toko = $request->facebook_toko;
        $setting->twitter_toko = $request->twitter_toko;

        // Upload logo jika ada
        if ($request->hasFile('logo_toko')) {
            $file = $request->file('logo_toko');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('foto/fotoSetting'), $filename);
            $setting->logo_toko = $filename;
        }

        $setting->save();

        return redirect()->back()->with('success', 'Pengaturan berhasil diperbarui');
    }
}
