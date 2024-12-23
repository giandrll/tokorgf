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
            'video_toko' => 'nullable|mimes:mp4,avi,mov', // Validasi untuk video (format yang valid)
            'textbranding_toko' => 'nullable|string', // Validasi untuk text branding
            'logo_toko' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg', // Validasi untuk logo
            'fotoandalan_slide1' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
            'fotoandalan_slide2' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
            'fotoandalan_slide3' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
            'fotokolaburasi_slide1' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
            'fotokolaburasi_slide2' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
            'fotokolaburasi_slide3' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
            'fotosedangtrend_slide1' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
            'fotosedangtrend_slide2' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $setting = Setting::first();
        if (!$setting) {
            $setting = new Setting;
        }

        // Update data yang dikirim dari form
        $setting->nama_toko = $request->nama_toko;
        $setting->email_toko = $request->email_toko;
        $setting->telefon_toko = $request->telefon_toko;
        $setting->instagram_toko = $request->instagram_toko;
        $setting->facebook_toko = $request->facebook_toko;
        $setting->twitter_toko = $request->twitter_toko;
        $setting->textbranding_toko = $request->textbranding_toko;

        // Upload logo jika ada
        if ($request->hasFile('logo_toko')) {
            $file = $request->file('logo_toko');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('foto/fotoSetting'), $filename);
            $setting->logo_toko = $filename;
        }

        // Upload video jika ada
        if ($request->hasFile('video_toko')) {
            $file = $request->file('video_toko');
            $videoFilename = time() . '_video.' . $file->getClientOriginalExtension();
            $file->move(public_path('video_setting'), $videoFilename);
            $setting->video_toko = $videoFilename;
        }

        // Upload fotoandalan_slide1 jika ada
        if ($request->hasFile('fotoandalan_slide1')) {
            $file = $request->file('fotoandalan_slide1');
            $filename = time() . '_fotoandalan1.' . $file->getClientOriginalExtension();
            $file->move(public_path('foto/fotoSetting'), $filename);
            $setting->fotoandalan_slide1 = $filename;
        }

        // Upload fotoandalan_slide2 jika ada
        if ($request->hasFile('fotoandalan_slide2')) {
            $file = $request->file('fotoandalan_slide2');
            $filename = time() . '_fotoandalan2.' . $file->getClientOriginalExtension();
            $file->move(public_path('foto/fotoSetting'), $filename);
            $setting->fotoandalan_slide2 = $filename;
        }

        // Upload fotoandalan_slide3 jika ada
        if ($request->hasFile('fotoandalan_slide3')) {
            $file = $request->file('fotoandalan_slide3');
            $filename = time() . '_fotoandalan3.' . $file->getClientOriginalExtension();
            $file->move(public_path('foto/fotoSetting'), $filename);
            $setting->fotoandalan_slide3 = $filename;
        }

        // Upload fotokolaburasi_slide1 jika ada
        if ($request->hasFile('fotokolaburasi_slide1')) {
            $file = $request->file('fotokolaburasi_slide1');
            $filename = time() . '_fotokolaburasi1.' . $file->getClientOriginalExtension();
            $file->move(public_path('foto/fotoSetting'), $filename);
            $setting->fotokolaburasi_slide1 = $filename;
        }

        // Upload fotokolaburasi_slide2 jika ada
        if ($request->hasFile('fotokolaburasi_slide2')) {
            $file = $request->file('fotokolaburasi_slide2');
            $filename = time() . '_fotokolaburasi2.' . $file->getClientOriginalExtension();
            $file->move(public_path('foto/fotoSetting'), $filename);
            $setting->fotokolaburasi_slide2 = $filename;
        }

        // Upload fotokolaburasi_slide3 jika ada
        if ($request->hasFile('fotokolaburasi_slide3')) {
            $file = $request->file('fotokolaburasi_slide3');
            $filename = time() . '_fotokolaburasi3.' . $file->getClientOriginalExtension();
            $file->move(public_path('foto/fotoSetting'), $filename);
            $setting->fotokolaburasi_slide3 = $filename;
        }

        // Upload fotosedangtrend_slide1 jika ada
        if ($request->hasFile('fotosedangtrend_slide1')) {
            $file = $request->file('fotosedangtrend_slide1');
            $filename = time() . '_fotosedangtrend1.' . $file->getClientOriginalExtension();
            $file->move(public_path('foto/fotoSetting'), $filename);
            $setting->fotosedangtrend_slide1 = $filename;
        }

        // Upload fotosedangtrend_slide2 jika ada
        if ($request->hasFile('fotosedangtrend_slide2')) {
            $file = $request->file('fotosedangtrend_slide2');
            $filename = time() . '_fotosedangtrend2.' . $file->getClientOriginalExtension();
            $file->move(public_path('foto/fotoSetting'), $filename);
            $setting->fotosedangtrend_slide2 = $filename;
        }

        $setting->save();

        return redirect()->back()->with('success', 'Pengaturan berhasil diperbarui');
    }
}
