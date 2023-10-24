@extends('layout.app')
<!-- Mewarisi tata letak dari 'layout.app' -->

<div class="content">
    <h3>Tambah Data Kategori</h3><hr>
    <!-- Header untuk halaman tambah data kategori -->

    <form action="/kategori/store" method="POST">
        @csrf
        <!-- Formulir untuk mengirimkan data kategori menggunakan metode POST, dengan token CSRF -->

        <div class="form-group row">
            <label for="kategori" class="col-sm-2 col-form-label">Kategori</label>
            <!-- Label untuk input nama kategori -->
            <div class="col-sm-10">
                <input type="text" class="form-control" id="nama_kategori" placeholder="Kategori" name="nama_kategori">
                <!-- Input teks untuk memasukkan nama kategori -->
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
        <!-- Tombol untuk mengirimkan data kategori yang baru dimasukkan -->
    </form>
</div>
