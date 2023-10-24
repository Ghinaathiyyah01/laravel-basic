@extends('layout.app')
<!-- Mewarisi tata letak dari 'layout.app' -->

<div class="content">
  <h3>Data Kategori</h3><hr>
  <!-- Header untuk halaman data kategori -->
  <a href="/kategori/create">Tambah Data</a>
  <!-- Tautan untuk menambah data kategori -->

  <table class="table table-bordered">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Kategori</th>
        <th scope="col">Edit</th>
      </tr>
    </thead>
    <!-- Baris judul tabel -->
    <tbody>
      @foreach($kategori as $no => $kategori)
        <!-- Mengulangi data kategori -->
        <tr>
          <th>{{ $no + 1 }}</th>
          <!-- Nomor urut -->
          <td>{{ $kategori->nama_kategori }}</td>
          <!-- Nama kategori -->
          <td>
            <button>
              <a href="/kategori/{{ $kategori->id }}/edit">Edit</a>
              <!-- Tautan untuk mengedit data kategori -->
              <a href="/kategori/{{ $kategori->id }}/hapus">Hapus</a>
              <!-- Tautan untuk menghapus data kategori -->
            </button>
          </td>
        </tr>
      @endforeach
      <!-- Akhir dari pengulangan data kategori -->
    </tbody>
  </table>
  <!-- Tabel untuk menampilkan data kategori -->
</div>
<!-- Akhir dari div "content" -->
