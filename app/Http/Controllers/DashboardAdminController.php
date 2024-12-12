<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Kasir;
use App\Models\Produk;
use App\Models\Payment;
use App\Models\WaOrder;
use App\Models\Customer;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use App\Models\kategoriproduk;
use App\Models\DetailTransaksi;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class DashboardAdminController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Data transaksi',
            'data_transaksi' => Transaksi::all(),
        ];
        return view('admin.dashboardadmin.transaksi', $data);
    }

    public function dashboard()
    {
        $dashboardData = $this->getDashboardData();
        return view('admin.dashboardadmin.admin', compact('dashboardData'));
    }

    private function getDashboardData()
    {

        $today = Carbon::today();
        $weeklyIncomeData = [];
        $monthlyIncomeData = [];
        $yearlyIncomeData = [];

        // Calculate weekly income for the last 4 weeks based on payment status
        for ($i = 3; $i >= 0; $i--) {
            $startOfWeek = $today->copy()->subWeeks($i)->startOfWeek();
            $endOfWeek = $today->copy()->subWeeks($i)->endOfWeek();
            
            $weeklyIncome = WaOrder::where('status', 'sudah_bayar')
                ->whereBetween('updated_at', [$startOfWeek, $endOfWeek])
                ->sum('total_harga');

            $weeklyIncomeData[] = [
                'week' => $startOfWeek->format('d M Y') . ' - ' . $endOfWeek->format('d M Y'),
                'income' => $weeklyIncome,
            ];
        }

        // Calculate monthly income for the last 12 months based on payment status
        for ($i = 11; $i >= 0; $i--) {
            $startOfMonth = $today->copy()->subMonths($i)->startOfMonth();
            $endOfMonth = $today->copy()->subMonths($i)->endOfMonth();
            
            $monthlyIncome = WaOrder::where('status', 'sudah_bayar')
                ->whereBetween('updated_at', [$startOfMonth, $endOfMonth])
                ->sum('total_harga');

            $monthlyIncomeData[] = [
                'month' => $startOfMonth->format('F Y'),
                'income' => $monthlyIncome,
            ];
        }

        // Calculate yearly income for the last 5 years based on payment status
        for ($i = 4; $i >= 0; $i--) {
            $startOfYear = $today->copy()->subYears($i)->startOfYear();
            $endOfYear = $today->copy()->subYears($i)->endOfYear();
            
            $yearlyIncome = WaOrder::where('status', 'sudah_bayar')
                ->whereBetween('updated_at', [$startOfYear, $endOfYear])
                ->sum('total_harga');

            $yearlyIncomeData[] = [
                'year' => $startOfYear->format('Y'),
                'income' => $yearlyIncome,
            ];

             // Tambahkan perhitungan stok per kategori
        $stockByCategory = Produk::select('id_kategori', 'kategoriproduk.nama_kategori', DB::raw('SUM(stok) as total_stok'))
        ->leftJoin('kategoriproduk', 'produk.id_kategori', '=', 'kategoriproduk.id')
        ->groupBy('id_kategori', 'kategoriproduk.nama_kategori')
        ->get();

        }

        return [
            'daily_income' => WaOrder::where('status', 'sudah_bayar')
                ->whereDate('updated_at', $today)
                ->sum('total_harga'),
            'total_stock' => Produk::sum('stok'),
            'stock_by_category' => $stockByCategory,
            'weekly_income_data' => $weeklyIncomeData,
            'monthly_income_data' => $monthlyIncomeData,
            'yearly_income_data' => $yearlyIncomeData,
        ];
    }




    public function store(Request $request)
    {
        $request->validate([
            'id_payment' => 'required|integer',
            'customer_id' => 'required|integer',
            'diskon' => 'required|numeric',
            'total_harga' => 'required|numeric',
            'details' => 'required|array',
            'details.*.id_produk' => 'required|integer',
            'details.*.harga' => 'required|numeric',
            'details.*.jumlah' => 'required|integer',
        ]);
    
        $transaksi = new Transaksi();
        $transaksi->id_payment = $request->id_payment;
        $transaksi->customer_id = $request->customer_id;
        $transaksi->diskon = $request->diskon;
        $transaksi->total_harga = $request->total_harga;
        $transaksi->id_kasir = Auth::guard('kasir')->id();
        $transaksi->save();
    
        foreach ($request->details as $detail) {
            $detailTransaksi = new DetailTransaksi();
            $detailTransaksi->id_transaksi = $transaksi->id;
            $detailTransaksi->id_produk = $detail['id_produk'];
            $detailTransaksi->harga = $detail['harga'];
            $detailTransaksi->jumlah = $detail['jumlah'];
            $detailTransaksi->save();
    
            // Reduce stock
            $product = Produk::find($detail['id_produk']);
            $product->stok -= $detail['jumlah'];
            $product->save();
        }
    
        return redirect()->route('transaksi.create')->with('success', 'Transaksi berhasil disimpan!');
    }

    public function getProductPrice($id)
    {
        $product = Produk::findOrFail($id);
        return response()->json(['harga' => $product->harga]);
    }

}