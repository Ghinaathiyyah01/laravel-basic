@extends('layout.app')
<!-- Mewarisi tata letak dari 'layout.app' -->

<div class="content">
    <h3>Tambah Data Kategori</h3><hr>
    <!-- Header untuk halaman tambah data kategori -->

    <form action="/kategori/{{ $kategori->id }}", method="POST">
        @method('put')
        @csrf
        <!-- Formulir untuk mengirimkan data kategori menggunakan metode POST, dengan token CSRF -->

        <div class="form-group row">
            <label for="kategori" class="col-sm-2 col-form-label">Kategori</label>
            <!-- Label untuk input nama kategori -->
            <div class="col-sm-10">
                <input type="text" class="form-control" id="nama_kategori" placeholder="Kategori" name="nama_kategori" value="{{ $kategori->nama_kategori }}">
                <!-- Input teks untuk memasukkan nama kategori, dengan nilai yang sudah ada (nilai awal) -->
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
        <!-- Tombol untuk mengirimkan perubahan data kategori -->
    </form>
</div>
