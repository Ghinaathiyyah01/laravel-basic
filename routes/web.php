<?php

use App\Http\Controllers\BarangController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/barang', [BarangController::class, 'index']);
// Rute ini menangani permintaan HTTP GET ke URL '/barang' dan mengarahkannya ke metode 'index' di kelas 'BarangController'.

Route::get('/barang/create', [BarangController::class, 'create']);
// Rute ini menangani permintaan HTTP GET ke URL '/barang/create' dan mengarahkannya ke metode 'create' di kelas 'BarangController'. Biasanya digunakan untuk menampilkan formulir pembuatan sumber daya baru.

Route::post('/barang/store', [BarangController::class, 'store']);
// Rute ini menangani permintaan HTTP POST ke URL '/barang/store' dan mengarahkannya ke metode 'store' di kelas 'BarangController'. Biasanya digunakan untuk menangani pengiriman formulir untuk membuat sumber daya baru.

Route::get('/barang/{id}/edit', [BarangController::class, 'edit']);
// Rute ini menangani permintaan HTTP GET ke URL seperti '/barang/{id}/edit', di mana '{id}' adalah segmen placeholder untuk nilai dinamis. Rute ini mengarahkan permintaan ke metode 'edit' di kelas 'BarangController', yang biasanya digunakan untuk mengedit sumber daya tertentu.

Route::put('/barang/{id}', [BarangController::class, 'update']);
// Rute ini menangani permintaan HTTP PUT ke URL seperti '/barang/{id}', di mana '{id}' adalah segmen placeholder untuk nilai dinamis. Rute ini mengarahkan permintaan ke metode 'update' di kelas 'BarangController', yang biasanya digunakan untuk memperbarui sumber daya tertentu.

Route::get('/barang/{id}/hapus', [BarangController::class, 'hapus']);
// Rute ini menangani permintaan HTTP GET ke URL seperti '/barang/{id}/hapus', di mana '{id}' adalah segmen placeholder untuk nilai dinamis. Rute ini mengarahkan permintaan ke metode 'hapus' di kelas 'BarangController'. Kata "hapus" menunjukkan bahwa ini mungkin digunakan untuk menghapus sumber daya tertentu.