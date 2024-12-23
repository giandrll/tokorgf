<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $table = 'cart';

    protected $fillable = [
        'customer_id',
        'id_produk',
        'size',
        'jumlah',
    ];
    
    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id');
    }

    public function produk()
    {
        return $this->belongsTo(Produk::class, 'id_produk', 'id');
    }
    
}
