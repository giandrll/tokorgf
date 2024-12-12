<?php

namespace App\Models;

use App\Models\Produk;
use App\Models\Customer;
use Illuminate\Database\Eloquent\Model;

class WaOrder extends Model
{
    protected $table = 'wa_orders';
    
    protected $fillable = [
        'customer_id',
        'id_produk',
        'jumlah',
        'size',
        'total_harga', 
        'status',
        'whatsapp_message'
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id');
    }

    public function produk()
    {
        return $this->belongsTo(Produk::class, 'id_produk');
    }

    // Helper method to format products data
    public function getProductDetails()
    {
        $products = [];
        $productIds = explode(',', $this->id_produk);
        $quantities = explode(',', $this->jumlah);
        $sizes = explode(',', $this->size);

        foreach($productIds as $index => $productId) {
            $product = Produk::find($productId);
            if($product) {
                $products[] = [
                    'product' => $product,
                    'quantity' => $quantities[$index] ?? 1,
                    'size' => $sizes[$index] ?? '',
                    'subtotal' => $product->harga * ($quantities[$index] ?? 1)
                ];
            }
        }

        return $products;
    }
}