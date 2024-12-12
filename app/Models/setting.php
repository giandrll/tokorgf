<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    // Tabel yang digunakan oleh model ini
    protected $table = 'setting';

    // Field yang bisa diisi secara massal
    protected $fillable = [
        'nama_toko', 
        'logo_toko', 
        'email_toko', 
        'telefon_toko', 
        'instagram_toko', 
        'facebook_toko', 
        'twitter_toko'
    ];
}
