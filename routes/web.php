<?php

use App\Http\Middleware\customer;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\AuthAdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthCustomerController;
use App\Http\Controllers\LaporanProdukController;
use App\Http\Controllers\DashboardAdminController;
use App\Http\Controllers\KategoriProdukController;
use App\Http\Controllers\DashboardProdukController;
use App\Http\Controllers\ProdukSebelumloginController;


Route::get('/', [DashboardController::class, 'index']);

//admin
Route::middleware('auth.admin')->group(function () {
Route::get('/admin', [DashboardAdminController::class, 'dashboard'])->name('dashboard.admin');
//invoive/cetak
Route::get('/invoice/print/{id}', [OrderController::class, 'printInvoice'])->name('invoice.print');
//logout admin
Route::post('/admin/logout', [AuthAdminController::class, 'logout'])->name('admin.logout');
///crud data kategoriproduk
Route::get('/kategoriproduk', [KategoriProdukController::class, 'index']);
Route::post('/kategoriproduk/store', [KategoriProdukController::class, 'store']);
Route::post('/kategoriproduk/update/{id}', [KategoriProdukController::class, 'update']);
Route::delete('/kategoriproduk/destroy/{id}', [KategoriProdukController::class, 'destroy']);
//crud data produk
Route::get('/produk', [ProdukController::class, 'index']);
Route::post('/produk/store', [ProdukController::class, 'store']);
Route::post('/produk/update/{id}', [ProdukController::class, 'update']);
Route::delete('/produk/destroy/{id}', [ProdukController::class, 'destroy']);
//data laporan pembelian
Route::get('/wa-orders',[OrderController::class, 'waOrders'])->name('wa.orders');
Route::post('/wa-orders/update-status/{id}', [OrderController::class, 'updateStatus'])->name('wa.orders.update.status');
Route::put('/admin/wa-orders/{id}/payment-status', [OrderController::class, 'updatePaymentStatus'])
->name('admin.orders.updatePaymentStatus');
Route::delete('/delete/{id}', [OrderController::class, 'destroy'])->name('order.destroy');
//data setiing
Route::get('/settings', [SettingController::class, 'index'])->name('settings.index');
Route::put('/settings', [SettingController::class, 'update'])->name('settings.update');
});
//register
Route::get('/registeradmin', [AuthAdminController::class, 'index2'])->name("admin.auth.index2");
Route::post('/registeradmin', [AuthAdminController::class, 'register'])->name("admin.register");
//route login
Route::get('/authadmin', [AuthAdminController::class, 'index'])->name("admin.auth.index");
Route::post('/authadmin', [AuthAdminController::class, 'login'])->name("admin.login");
//laporan pembelian via wa
Route::post('/track-wa-order', [OrderController::class,'trackWaOrder'])->name('track.wa.order');


//customer
Route::middleware('auth.customer')->group(function () {
//dashboard utama customer
  Route::post('/customer', [CustomerController::class, 'store']);
  Route::get('/dashboardcustomer', [CustomerController::class, 'index'])->name("customer.index");
  Route::post('/customer/store', [CustomerController::class, 'store']);
  Route::post('/customer/update/{id}', [CustomerController::class, 'update']);
//logout customer
  Route::post('/customer/logout', [AuthCustomerController::class, 'logout'])->name('customer.logout');
// dashboardproduk
  Route::get('/dashboardproduk', [DashboardProdukController::class, 'dashboardproduk'])->name('dashboardproduk');
//search
  Route::get('/dashboardproduk/search', [DashboardProdukController::class, 'search'])->name('dashboardproduk.search');
// Route untuk halaman profil customer
Route::get('/customer/profile', [ProfileController::class, 'profile'])->name('customer.profile');
Route::get('/customer/about', [AboutController::class, 'about'])->name('customer.about');
Route::post('/customer/update-photo', [ProfileController::class, 'updatePhoto'])->name('customer.updatePhoto');
Route::post('/customer/update-profile', [ProfileController::class, 'updateProfile'])->name('customer.updateProfile');
//data keranjang
  Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
  Route::post('/cart/store', [CartController::class, 'store'])->name('cart.store');
  Route::delete('/cart/{id}', [CartController::class, 'destroy'])->name('cart.destroy');
});

//login custumer
 Route::get('/authcustomer', [AuthCustomerController::class, 'index'])->name("customer.auth.index");
Route::post('/login', [AuthCustomerController::class, 'login'])->name("customer.login");
//register customer
Route::get('/register', [AuthCustomerController::class, 'index2'])->name("customer.auth.index2");
Route::post('/register', [AuthCustomerController::class, 'register'])->name("customer.register");




Route::get('/produksebelumlogin', [ProdukSebelumloginController::class, 'produksebelumlogin'])->name('produksebelumlogin');






// Route::get('/cetak-transaksi/{id}', [TransaksiController::class, 'cetakTransaksi'])->name('cetak.transaksi');


// Route::get('/cart', [ProdukController::class, 'cart'])->name('cart.index');
// Route::post('/cart/add/{id}', [ProdukController::class, 'addToCart'])->name('cart.add');
// Route::get('/checkout', [ProdukController::class, 'checkoutForm'])->name('checkout.index');
// Route::post('/checkout/process', [ProdukController::class, 'checkout'])->name('checkout.process');


// Route::get('/kasir/poto/{id}', [KasirController::class, 'showPoto'])->name('kasir.poto');
// Route::resource('kasir', KasirController::class);


// Route::get('/payment', [PaymentController::class, 'index']);
// Route::post('/payment/store', [PaymentController::class, 'store'])->name('payment.store');
// Route::post('/payment/update/{id}', [PaymentController::class, 'update']);
// Route::post('/payment/destroy/{id}', [PaymentController::class, 'destroy']);


// //laporan produk admin
// Route::get('/laporanproduk', [LaporanProdukController::class, 'laporanproduk']);
// Route::post('/laporanproduk/store', [LaporanProdukController::class, 'store'])->name('produk.store');
// Route::post('/laporanproduk/update/{id}', [LaporanProdukController::class, 'update']);
// Route::post('/laporanproduk/destroy/{id}', [LaporanProdukController::class, 'destroy']);
