<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index(){
        // Mengambil semua data kategori dari model Kategori
        $kategori = Kategori::all();

        // Mengembalikan tampilan 'kategori.index' dengan data kategori
        return view('kategori.index', compact(['kategori']));
    }

    public function create(){
        // Menampilkan tampilan untuk membuat data kategori baru
        return view('kategori.create');
    }

    public function store(Request $request){
        // Validasi data yang dikirimkan dari formulir
        $kategori = $request->validate([
            'nama_kategori' => 'required',
        ]);

        // Membuat data kategori baru dalam model Kategori
        $new = Kategori::create($kategori);

        // Mengarahkan pengguna kembali ke tampilan daftar kategori
        return redirect('/kategori');
    }

    public function edit($id){
        // Mengambil data kategori berdasarkan ID
        $kategori = Kategori::find($id);

        // Menampilkan tampilan untuk mengedit data kategori
        return view('kategori.edit', compact(['kategori']));
    }
    
    public function update($id, Request $request){
        // Mengambil data kategori berdasarkan ID
        $kategori = Kategori::find($id);

        // Memperbarui data kategori berdasarkan data yang dikirimkan dari formulir
        $kategori->update($request->all());

        // Mengarahkan pengguna kembali ke tampilan daftar kategori
        return redirect('/kategori');
    }

    public function hapus($id){
        // Mengambil data kategori berdasarkan ID
        $kategori = Kategori::find($id);

        // Menghapus data kategori dari model Kategori
        $kategori->delete();

        // Mengarahkan pengguna kembali ke tampilan daftar kategori
        return redirect('/kategori');
    }
}