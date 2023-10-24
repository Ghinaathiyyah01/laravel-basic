<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Kategori;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index(){
        // Mengambil semua data barang dari model Barang

        $barang = barang::join('kategoris', 'barangs.kategori_id', '=', 'kategoris.id')
        ->select('barangs.*', 'kategoris.nama_kategori')
        ->get();

        // Mengembalikan tampilan 'barang.index' dengan data barang
        return view('barang.index', compact(['barang']));
    }

    public function create(){
        // Menampilkan tampilan untuk membuat data barang baru
        $kategori = Kategori::all();
        return view('barang.create', compact('kategori'));
    }

    public function store(Request $request){
        // Validasi data yang dikirimkan dari formulir
        $barang = $request->validate([
            'nama' => 'required',
            'kategori_id'=> 'required',
            'harga' => 'required|numeric',
            'jumlah' => 'required|numeric',
        ]);

        // Membuat data barang baru dalam model Barang
        $new = Barang::create($barang);

        // Mengarahkan pengguna kembali ke tampilan daftar barang
        return redirect('/barang');
    }

    public function edit($id){
        // Mengambil data barang berdasarkan ID
        $barang = Barang::find($id);
        $kategori = kategori::all();

        // Menampilkan tampilan untuk mengedit data barang
        return view('barang.edit', compact(['barang', 'kategori']));
    }

    public function update($id, Request $request){
        // Mengambil data barang berdasarkan ID
        $barang = Barang::find($id);

        // Memperbarui data barang berdasarkan data yang dikirimkan dari formulir
        $barang->update($request->except(['_token', 'submit']));

        // Mengarahkan pengguna kembali ke tampilan daftar barang
        return redirect('/barang');
    }

    public function hapus($id){
        // Mengambil data barang berdasarkan ID
        $barang = Barang::find($id);

        // Menghapus data barang dari model Barang
        $barang->delete();

        // Mengarahkan pengguna kembali ke tampilan daftar barang
        return redirect('/barang');
    }
}