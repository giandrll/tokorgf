<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class setting extends Model
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
        'twitter_toko',
        'video_toko',
        'textbranding_toko',
        'fotoandalan_slide1',
        'fotoandalan_slide2',
        'fotoandalan_slide3',
        'fotokolaburasi_slide1',
        'fotokolaburasi_slide2',
        'fotokolaburasi_slide3',
        'fotosedangtrend_slide1',
        'fotosedangtrend_slide2',
        'fotosedanghits',


    ];
    
        public function getFotosedanghitsAttribute($value)
        {
            return json_decode($value, true) ?? [];
        }
    
        /**
         * Mutator for fotosedanghits.
         * This converts an array into a JSON string before saving to the database.
         */
        public function setFotosedanghitsAttribute($value)
        {
            $this->attributes['fotosedanghits'] = json_encode($value);
        }
    
    
        
    }
    
    

