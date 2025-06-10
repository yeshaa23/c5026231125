<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BisController extends Controller
{
    public function index()
    {
        // Mengambil data dari tabel bis
        $bis = DB::table('bis')->paginate(10);

        // Mengirim data ke view index
        return view('index2', ['bis' => $bis]);
    }

    public function tambah()
    {
        // Menampilkan view tambah data bis
        return view('tambah2');
    }

    public function store(Request $request)
    {
        // Insert data ke dalam tabel bis
        DB::table('bis')->insert([
            'merkbis'   => $request->merkbis,
            'hargabis'  => $request->hargabis,
            'tersedia'  => $request->tersedia ? 1 : 0, // Checkbox disimpan sebagai 1 (true) atau 0 (false)
            'berat'     => $request->berat
        ]);

        // Redirect ke halaman utama
        return redirect('/bis');
    }

    public function edit($id)
    {
        $bis = DB::table('bis')->where('id', $id)->first(); // Gunakan first() untuk mendapatkan satu data

        if (!$bis) {
            return redirect('/bis')->with('error', 'Data Bis tidak ditemukan.');
        }

        return view('edit2', ['bis' => $bis]);
    }

    public function update(Request $request)
    {
        // Update data bis
        DB::table('bis')->where('id', $request->id)->update([
            'merkbis'   => $request->merkbis,
            'hargabis'  => $request->hargabis,
            'tersedia'  => $request->tersedia ? 1 : 0, // Checkbox disimpan sebagai 1 (true) atau 0 (false)
            'berat'     => $request->berat
        ]);

        session()->flash('success', 'Data Bis berhasil ditambahkan!');
        return redirect('/bis');
    }

    public function hapus($id)
    {
        // Hapus data bis
        DB::table('bis')->where('id', $id)->delete();

        return redirect('/bis');
    }

    public function cari(Request $request)
    {
        $cari = $request->cari;

        // Cari berdasarkan merkbis
        $bis = DB::table('bis')
            ->where('merkbis', 'like', "%" . $cari . "%")
            ->paginate();

        return view('index2', ['bis' => $bis]);
    }
}
