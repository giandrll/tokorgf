<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable; // Menggunakan User sebagai Authenticatable
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Customer extends Authenticatable
{
    use HasFactory;

    
    protected $table = "customer";

    protected $fillable = [
        'nama',
        'no_telpon',
        'email',
        'password',
        'alamat',
        'foto',
    ];

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $hidden = [
        'password',
        'remember_token',
    ];

    

}
