<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Setting;  // Mengimpor model Setting
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthAdminController extends Controller
{
    public function index(){
        // Ambil data setting
        $data_setting = Setting::all();

        return view('admin.auth_admin.authadmin', [
            'data_setting' => $data_setting, // Pass data setting ke view
        ]);
    }

    public function login(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Menggunakan Auth guard 'admin'
        if (Auth::guard('admin')->attempt(['email' => $validatedData['email'], 'password' => $validatedData['password']])) {
            // Ambil data setting setelah login berhasil
            $data_setting = Setting::all(); 

            // Jika login berhasil, arahkan ke halaman dashboard admin
            return redirect()->intended('/admin')->with([
                'data_setting' => $data_setting, // Pass data setting ke dashboard
            ]);
        }

        return redirect()->to('/authadmin');
    }

    public function index2(){
        // Ambil data setting
        $data_setting = Setting::all();

        return view('admin.auth_admin.register', [
            'data_setting' => $data_setting, // Pass data setting ke view
        ]);
    }
    
    public function register(Request $request)
    {
        // Validasi input
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:admin,email', // Pastikan unique pada tabel admin
            'password' => 'required|string|min:8|confirmed',
        ]);

        try {
            // Buat pengguna baru
            Admin::create([
                'name' => $validatedData['name'],
                'email' => $validatedData['email'],
                'password' => Hash::make($validatedData['password']), // Hash password sebelum menyimpan
            ]);

            // Login otomatis setelah registrasi
            Auth::guard('admin')->attempt(['email' => $validatedData['email'], 'password' => $validatedData['password']]);

            // Ambil data setting setelah registrasi
            $data_setting = Setting::all();

            // Redirect ke halaman login admin dengan data setting
            return redirect('/authadmin')->with([
                'data_setting' => $data_setting, // Pass data setting ke view
            ]);

        } catch (\Exception $e) {
            // Tangani kesalahan apapun yang mungkin terjadi
            return redirect()->back()
                ->withErrors(['error' => 'Terjadi kesalahan saat registrasi'])
                ->withInput($request->except('password'));
        }
    }

    public function logout()
    {
        Auth::guard('admin')->logout();  // Logout dari guard 'admin'
        return redirect('/authadmin');
    }
}
