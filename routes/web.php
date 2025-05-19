<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Coba;

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
// Route::get('/', function () {
//     return view('welcome');
// });
// //kode diatas ada contohnya di dokumentasi laravel

// Route::get('/selamat', function () {
//     return view('welcome');
// });

// //ini simple route
// Route::get('halo', function () {
// 	return "<h1>Halo, Selamat datang di tutorial laravel www.malasngoding.com</h1>";
// });

// //dia ga muncul underscrore awalnya, karena ga punya filenya. ceknya ke bagian explorer - resources - views
// //nah kalo dah bikin dia bakalan muncul underscore, terus cek aja, jangan lupa pake 127.0.01:8000/blog
// Route::get('blog', function () {
// 	return view('blog');
// });

// Route::get('hello',[Coba::class, 'helloword']);
// //Route::get('hello','App\Http\Controllers\Coba@helloword)

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
Route::get('/index', function () {
    return view('index');
});
