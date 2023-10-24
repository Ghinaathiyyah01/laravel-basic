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
            <label for="nama" class="col-sm-2 col-form-label">Kategori</label>
            <!-- Label untuk input kategori barang -->
            <div class="col-sm-10">
                <select name="kategori_id" id="kategori_id">
                @foreach ($kategori as $kategori)
                    <option value="{{ $kategori->id }}">{{ $kategori->nama_kategori }}</option>
                @endforeach
                </select>
            </div>
            <!-- Dropdown/select untuk memilih kategori barang dari daftar kategori yang ada -->
        </div>

        <div class="form-group row">
            <label for="harga" class="col-sm-2 col-form-label">Harga</label>
            <!-- Label untuk input harga barang -->
            <div class="col-sm-10">
                <input type="text" class="form-control" id="harga" placeholder="Harga" name="harga">
            </div>
            <!-- Input teks untuk memasukkan harga barang -->
        </div>

        <div class="form-group row">
            <label for "jumlah" class="col-sm-2 col-form-label">Jumlah</label>
            <!-- Label untuk input jumlah barang -->
            <div class="col-sm-10">
                <input type="text" class="form-control" id="jumlah" placeholder="Jumlah" name="jumlah" >
            </div>
            <!-- Input teks untuk mengisi jumlah barang -->
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
        <!-- Tombol untuk mengirimkan data barang yang baru dimasukkan -->
    </form>
</div>
