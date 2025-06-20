<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Coba;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PegawaiDBController;
use App\Http\Controllers\KaryawanDBController;
use App\Http\Controllers\BisController;
use App\Http\Controllers\KeranjangBelanjaController;
use App\Http\Controllers\PageCounterController;
use App\Http\Controllers\MyKaryawanController;

//kalo di java use itu mirip import
//import java.io.*;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//system.out.println();
//nah kalo di oop nya php itu ::, jadinya ganti . di java itu. jadi misalkan di java bakalan ditulis Route.get();
//ini kalo di php jadinya:
Route::get('/', function () {
    return view('welcome');
});
//kode diatas ada contohnya di dokumentasi laravel

Route::get('/selamat', function () {
    return view('welcome');
});

// //ini simple route
Route::get('halo', function () {
    return "<h1>Halo, Selamat datang di tutorial laravel www.malasngoding.com</h1>";
});

//dia ga muncul underscrore awalnya, karena ga punya filenya. ceknya ke bagian explorer - resources - views
//nah kalo dah bikin dia bakalan muncul underscore, terus cek aja, jangan lupa pake 127.0.01:8000/blog
// Route::get('blog', function () {
//     return view('blog');
// });

Route::get('hello',[Coba::class, 'helloword']);
//Route::get('hello','App\Http\Controllers\Coba@helloword)

Route::get('/frontend', function () {
    return view('frontend');
});
Route::get('/pertama', function () {
    return view('pertama');
});
Route::get('/pertemuan4', function () {
    return view('pertemuan4');
});
Route::get('/bootstrap1', function () {
    return view('bootstrap1');
});
Route::get('/bootstrap2', function () {
    return view('bootstrap2');
});
Route::get('/js1', function () {
    return view('js1');
});
Route::get('/js2', function () {
    return view('js2');
});
Route::get('/tugas2', function () {
    return view('tugas2');
});
Route::get('/jsets2', function () {
    return view('jsets2');
});
Route::get('/ets', function () {
    return view('ets');
});

// Route::get('dosen',[Coba::class, 'index']);
// Route::get('/pegawai/{nama}', [PegawaiController::class, 'index']);
// Route::get('/formulir', [PegawaiController::class, 'formulir']); //halaman isian form
// Route::post('/formulir/proses', [PegawaiController::class, 'proses']); //action form

//route blog
Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);

//crud pegawai
Route::get('pegawai', [PegawaiDBController::class, 'index']);
Route::get('/pegawai/tambah',[PegawaiDBController::class, 'tambah']);
Route::post('/pegawai/store',[PegawaiDBController::class, 'store']);
Route::get('/pegawai/edit/{id}',[PegawaiDBController::class, 'edit']);
Route::post('/pegawai/update',[PegawaiDBController::class, 'update']);
Route::get('/pegawai/hapus/{id}',[PegawaiDBController::class, 'hapus']);
Route::get('/pegawai/cari',[PegawaiDBController::class, 'cari']);

//crud bis
Route::get('/bis', [BisController::class, 'index']);
Route::get('/bis/tambah', [BisController::class, 'tambah']);
Route::post('/bis/store', [BisController::class, 'store']);
Route::get('/bis/edit/{id}', [BisController::class, 'edit']);
Route::post('/bis/update/{id}', [BisController::class, 'update']);
Route::get('/bis/hapus/{id}', [BisController::class, 'hapus']);
Route::get('/bis/cari', [BisController::class, 'cari']);

//crud keranjang belanja
Route::get('/keranjangbelanja', [KeranjangBelanjaController::class, 'index']);
Route::get('/keranjangbelanja/beli', [KeranjangBelanjaController::class, 'beli']);
Route::post('/keranjangbelanja/store', [KeranjangBelanjaController::class, 'store']);
Route::get('/keranjangbelanja/hapus/{ID}', [KeranjangBelanjaController::class, 'hapus']);

// Route pagecounter
Route::get('/pagecounter', [PageCounterController::class, 'show']);

// Route karyawan
Route::get('/karyawan', [KaryawanDBController::class, 'karyawan']);
Route::get('/karyawan/tambahKaryawan', [KaryawanDBController::class, 'tambahKaryawan']);
Route::post('/karyawan/storeKaryawan', [KaryawanDBController::class, 'storeKaryawan']);
Route::get('/karyawan/editKaryawan/{ID}', [KaryawanDBController::class, 'editKaryawan']);
Route::post('/karyawan/updateKaryawan', [KaryawanDBController::class, 'updateKaryawan']);
Route::get('/karyawan/hapusKaryawan/{ID}', [KaryawanDBController::class, 'hapusKaryawan']);

// Route eas
Route::get('/eas', [MyKaryawanController::class, 'index']);
Route::get('/eas/view/{kodepegawai}', [MyKaryawanController::class, 'view']);
Route::get('/eas/edit/{kodepegawai}', [MyKaryawanController::class, 'edit']);
Route::post('/eas/update', [MyKaryawanController::class, 'update']);
