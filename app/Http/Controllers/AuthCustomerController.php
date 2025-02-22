<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Setting; // Pastikan mengimpor model Setting
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthCustomerController extends Controller
{
    public function index(){
        // Ambil data setting yang diperlukan
        $data_setting = Setting::all(); // Ambil semua data setting

        return view("customer.auth_customer.authcustomer", [
            'data_setting' => $data_setting, // Pass data setting ke view
        ]);
    }

    public function login(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Menggunakan Auth guard 'customer'
        if (Auth::guard('customer')->attempt(['email' => $validatedData['email'], 'password' => $validatedData['password']])) {
            // Ambil data setting setelah login berhasil
            $data_setting = Setting::all(); 

            // Jika login berhasil, arahkan ke halaman dashboard customer
            return redirect()->intended('/dashboardcustomer')->with([
                'data_setting' => $data_setting, // Pass data setting ke dashboard
            ]);
        }

        return redirect()->to('/authcustomer');
    }

    public function logout()
    {
        Auth::guard('customer')->logout();  // Logout dari guard 'customer'
        return redirect('/');
    }

    public function index2(){
        // Ambil data setting yang diperlukan
        $data_setting = Setting::all();

        return view('customer.auth_customer.register', [
            'data_setting' => $data_setting, // Pass data setting ke view
        ]);
    }
    
    public function register(Request $request)
    {
        // Validasi input
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:customer,email', // Pastikan unique pada tabel customers
            'password' => 'required|string|min:8|confirmed',
        ]);
    
        try {
            // Cek apakah email sudah ada
            $existingCustomer = Customer::where('email', $request->email)->first();
            
            if ($existingCustomer) {
                // Jika email sudah terdaftar, kembalikan dengan pesan error
                return redirect()->back()
                    ->withErrors(['email' => 'Email sudah terdaftar'])
                    ->withInput($request->except('password'));
            }
    
            // Buat pengguna baru
            $customer = Customer::create([
                'nama' => $validatedData['nama'],
                'email' => $validatedData['email'],
                'password' => Hash::make($validatedData['password']), // Hash password sebelum menyimpan
            ]);
    
            // Login otomatis setelah registrasi
            Auth::login($customer);
    
            // Ambil data setting setelah registrasi
            $data_setting = Setting::all();

            // Flash message sukses
            Session::flash('status', 'success');
            Session::flash('message', 'Registrasi berhasil! Silakan login.');
    
            // Redirect ke dashboard dengan data setting
            return redirect('/authcustomer')->with([
                'data_setting' => $data_setting, // Pass data setting ke view
            ]);
    
        } catch (\Exception $e) {
            // Tangani kesalahan apapun yang mungkin terjadi
            return redirect()->back()
                ->withErrors(['error' => 'Terjadi kesalahan saat registrasi'])
                ->withInput($request->except('password'));
        }
    }
}
