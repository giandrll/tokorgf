<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class kategoriproduk extends Model
{
    use HasFactory;

    protected $table = 'kategoriproduk';

    protected $fillable = [
        'nama_kategori',
    ];

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


}
