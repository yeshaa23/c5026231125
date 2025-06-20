<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MyKaryawanController extends Controller
{
    public function index() {
        $mykaryawan = DB::table('mykaryawan')->get();
        return view('eas', ['mykaryawan' => $mykaryawan]);
    }

    public function view($kodepegawai) {
        $mykaryawan = DB::table('mykaryawan')->where('kodepegawai', $kodepegawai)->first();
        return view('viewkaryawan', ['mykaryawan' => $mykaryawan]);
    }

    public function edit($kodepegawai) {
        $mykaryawan = DB::table('mykaryawan')->where('kodepegawai', $kodepegawai)->first();
        return view('editmykaryawan', ['mykaryawan' => $mykaryawan]);
    }

    public function update(Request $request) {
        DB::table('mykaryawan')->where('kodepegawai', $request->kodepegawai)->update([
            'namalengkap' => $request->namalengkap,
            'divisi' => $request->divisi,
            'departemen' => $request->departemen,
        ]);

        return redirect('/eas');
    }
}
