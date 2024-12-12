<?php

namespace App\Models;

use App\Models\transaksi;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\payment;

class payment extends Model
{
    use HasFactory;

    protected $table = "payment";

    protected $fillable = [
    'id_order',
    'jumlah',
    'metode_pembayaran',
    'payment_status',
];

// Relasi ke order
public function order()
{
    return $this->belongsTo(Order::class);
}
    public function transaksi()
    {
        return $this->hasMany(transaksi::class);
    }
}

// class Transaksi extends Model {
//     public function payment(){
//         return $this->belongsTo(Payment::class);
//     }
// }
