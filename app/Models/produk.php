<?php

namespace App\Models; 

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Produk extends Model
{
    use HasFactory;

    protected $table = 'produk';

    protected $fillable = [
        'nama_produk',
        'id_kategori',
        'harga',
        'stok',
        'foto',
        'size',
        'deskripsi',
    ];

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    public function kategori()
    {
        return $this->belongsTo(KategoriProduk::class, 'id_kategori');
    }

    public function waOrder()
    {
        return $this->hasMany(WaOrder::class);
    }

    public function cart()
    {
        return $this->hasMany(Cart::class);
    }
}
