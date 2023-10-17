@extends('layout.app')

<div class="content">
    <h3>Tambah Data Barang</h3><hr>
    <!-- Header untuk halaman tambah data barang -->

    <form action="/barang/store" method="POST">
        @csrf
        <!-- Formulir untuk mengirimkan data barang menggunakan metode POST, dengan token CSRF -->

        <div class="form-group row">
            <label for="nama" class="col-sm-2 col-form-label">Nama Barang</label>
            <!-- Label untuk input nama barang -->
            <div class="col-sm-10">
                <input type="text" class="form-control" id="nama" placeholder="Nama Barang" name="nama">
            </div>
            <!-- Input teks untuk memasukkan nama barang -->
        </div>

        <div class="form-group row">
            <label for="harga" class="col-sm-2 col-form-label">Harga</label>
            <!-- Label untuk input harga barang -->
            <div class="col-sm-10">
                <input type="text" class="form-control" id="harga" placeholder="Harga" name="harga">
            </div>
            <!-- Input teks untuk memasukkan harga barang -->
        </div>
    </form>
</div>
