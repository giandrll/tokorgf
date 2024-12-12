<?php

namespace App\Http\Controllers;

use Log;
use App\Models\Setting;
use App\Models\WaOrder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function trackWaOrder(Request $request)
    {
        Log::info('Data Masuk:', $request->all());
        
        $user = Auth::guard('customer')->user();
        
        try {
            if (!$user) {
                return response()->json([
                    'success' => false,
                    'message' => 'User not authenticated'
                ], 401);
            }
            
            // Handle multiple products
            $productIds = is_array($request->id_produk) ? implode(',', $request->id_produk) : $request->id_produk;
            $quantities = is_array($request->jumlah) ? implode(',', $request->jumlah) : $request->jumlah;
            $sizes = is_array($request->size) ? implode(',', $request->size) : $request->size;
            
            $order = WaOrder::create([
                'customer_id' => $user->id,
                'id_produk' => $productIds,
                'jumlah' => $quantities,
                'size' => $sizes,
                'total_harga' => $request->total_harga,
                'status' => 'belum_bayar',
                'whatsapp_message' => $request->whatsapp_message
            ]);
            
            return response()->json([
                'success' => true,
                'order_id' => $order->id,
                'message' => 'Order tracked successfully'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to track order: ' . $e->getMessage()
            ], 500);
        }
    }
    
    public function waOrders()
    {
        if (!Auth::guard('admin')->check()) {
            return redirect()->route('admin.login');
        }
        
        $orders = WaOrder::with(['customer'])
            ->orderBy('created_at', 'desc')
            ->paginate(10);
        
        $data_setting = Setting::all();
        
        return view('admin.wa-orders', compact('orders', 'data_setting'));
    }

    public function updatePaymentStatus(Request $request, $id)
    {
        try {
            if (!Auth::guard('admin')->check()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Unauthorized'
                ], 403);
            }

            $order = WaOrder::findOrFail($id);
            $order->status = $request->status;
            $order->save();

            return redirect()->back()->with('success', 'Status pembayaran berhasil diperbarui');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Gagal memperbarui status pembayaran');
        }
    }
    
    public function updateStatus(Request $request, $id)
    {
        try {
            if (!Auth::guard('admin')->check()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Unauthorized'
                ], 403);
            }
            
            $order = WaOrder::findOrFail($id);
            $order->status = $request->status;
            $order->save();
            
            return response()->json([
                'success' => true,
                'message' => 'Status updated successfully'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to update status: ' . $e->getMessage()
            ], 500);
        }
    }
    public function destroy($id)
    {
        // Cari data berdasarkan id
        $order = WaOrder::findOrFail($id);

        // Hapus data
        $order->delete();

        // Redirect atau kembali dengan pesan sukses
        return redirect()->route('wa.orders')->with('success', 'Data berhasil dihapus');
    }


    


    
    public function printInvoice($id)
    {
        if (!Auth::guard('admin')->check() && 
            (!Auth::guard('customer')->check() || 
             WaOrder::where('id', $id)
                ->where('customer_id', Auth::guard('customer')->id())
                ->where('status', 'sudah_bayar') // Only allow if paid
                ->doesntExist())) {
            return redirect()->route('login');
        }
        
        $data_setting = Setting::all();
        $order = WaOrder::with(['customer', 'produk'])->findOrFail($id);
        
        // Check if order is paid
        if ($order->status !== 'sudah_bayar') {
            return redirect()->back()->with('error', 'Invoice hanya tersedia untuk pesanan yang sudah dibayar');
        }
        
        return view('invoice', compact('order', 'data_setting'));
    }
}