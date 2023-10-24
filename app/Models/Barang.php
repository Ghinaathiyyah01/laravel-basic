<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    // Daftar atribut yang dikecualikan dari pengisian massal (mass-assignment).
    // Atribut yang ada dalam $guarded tidak akan diisi secara otomatis.
    protected $guarded = ['_token', 'submit'];
    
    public function Kategori(){
        return $this->belongsTo('App\Models\Kategori','kategori_id','id');
    }
}

// Model di atas adalah representasi dari entitas "Barang" dalam aplikasi Laravel.
// Ia mewarisi sifat-sifat dari kelas Model Eloquent, yang memungkinkan kita berinteraksi dengan database.
// Trait HasFactory digunakan untuk mendukung pembuatan data yang dapat diuji (testing) dengan mudah.
// Atribut $guarded mengidentifikasi atribut-atribut yang harus dikecualikan dari operasi pengisian massal.
// Dalam hal ini, atribut '_token' dan 'submit' tidak akan diisi massal dan harus diisi secara manual.