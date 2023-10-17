@extends('layout.app')
<!-- Mewarisi tata letak dari 'layout.app' -->

<div class="content">
  <h3>Data Barang</h3><hr>
  <!-- Header untuk halaman data barang -->
  <a href="/barang/create">Tambah Data</a>
  <!-- Tautan untuk menambah data barang -->
  <table class="table table-bordered">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nama</th>
        <th scope="col">Harga</th>
        <th scope="col">Jumlah</th>
        <th scope="col">Edit</th>
      </tr>
    </thead>
    <!-- Baris judul tabel -->
    <tbody>
      @foreach($barang as $no => $brg)
        <!-- Mengulangi data barang -->
        <tr>
          <th>{{ $no + 1 }}</th>
          <!-- Nomor urut -->
          <td>{{ $brg->nama }}</td>
          <!-- Nama barang -->
          <td>{{ $brg->harga }}</td>
          <!-- Harga barang -->
          <td>{{ $brg->jumlah }}</td>
          <!-- Jumlah barang -->
          <td>
            <button>
              <a href="/barang/{{ $brg->id }}/edit">Edit</a>
              <!-- Tautan untuk mengedit data barang -->
              <a href="/barang/{{ $brg->id }}/hapus">Hapus</a>
              <!-- Tautan untuk menghapus data barang -->
            </button>
          </td>
        </tr>
      @endforeach
      <!-- Akhir dari pengulangan data barang -->
    </tbody>
  </table>
  <!-- Tabel untuk menampilkan data barang -->
</div>
<!-- Akhir dari div "content" -->
