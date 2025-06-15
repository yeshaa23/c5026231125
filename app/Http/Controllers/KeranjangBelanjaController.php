<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KeranjangBelanjaController extends Controller
{
    // Tampilkan data keranjang dengan pagination
    public function index()
    {
        $keranjangbelanja = DB::table('keranjangbelanja')->paginate(10);
        return view('index3', ['keranjangbelanja' => $keranjangbelanja]);
    }

    // Tampilkan form beli
    public function beli()
    {
        $lastID = DB::table('keranjangbelanja')->max('ID');
        $newID = $lastID ? intval($lastID) + 1 : 100;

        return view('beli', ['autoID' => $newID]);
    }

    // Simpan data pembelian
    public function store(Request $request)
    {
        $request->validate([
            'ID' => 'required',
            'KodeBarang' => 'required',
            'Jumlah' => 'required|numeric|min:1',
            'Harga' => 'required|numeric|min:1',
        ]);

        DB::table('keranjangbelanja')->insert([
            'ID' => $request->ID,
            'KodeBarang' => $request->KodeBarang,
            'Jumlah' => $request->Jumlah,
            'Harga' => $request->Harga
        ]);

        return redirect('/keranjangbelanja')->with('success', 'Data berhasil ditambahkan!');
    }

    // Hapus data
    public function hapus($ID)
    {
        DB::table('keranjangbelanja')->where('ID', $ID)->delete();
        return redirect('/keranjangbelanja')->with('success', 'Data berhasil dihapus!');
    }
}
