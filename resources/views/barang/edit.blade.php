@extends('layout.app')
<!-- Mewarisi tata letak dari 'layout.app' -->

<div class="content">
    <h3>Edit Data Barang</h3><hr>
    <!-- Header untuk halaman edit data barang -->

    <form action="/barang/{{ $barang->id }}", method="POST">
        <!-- Formulir untuk mengirimkan data barang dengan metode PUT -->
        @csrf
        <!-- Menambahkan token CSRF untuk keamanan -->
        @method('put')
        <!-- Menggunakan metode PUT dalam formulir -->

        <div class="form-group row">
            <label for="nama" class="col-sm-2 col-form-label">Nama Barang</label>
            <!-- Label untuk input nama barang -->
            <div class="col-sm-10">
                <input type="text" class="form-control" id="nama" placeholder="Nama Barang" name="nama" value="{{ $barang->nama }}">
            </div>
            <!-- Input teks untuk mengedit nama barang -->
        </div>

        <div class="form-group row">
            <label for "harga" class="col-sm-2 col-form-label">Harga</label>
            <!-- Label untuk input harga barang -->
            <div class="col-sm-10">
                <input type="text" class="form-control" id="harga" placeholder="Harga" name="harga" value="{{ $barang->harga }}">
            </div>
            <!-- Input teks untuk mengedit harga barang -->
        </div>
        
        <div class="form-group row">
            <label for "jumlah" class="col-sm-2 col-form-label">Jumlah</label>
            <!-- Label untuk input jumlah barang -->
            <div class="col-sm-10">
                <input type="text" class="form-control" id="jumlah" placeholder="Jumlah" name="jumlah" value="{{ $barang->jumlah }}">
            </div>
            <!-- Input teks untuk mengedit jumlah barang -->
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
        <!-- Tombol untuk mengirimkan perubahan data barang -->
    </form>
</div>
