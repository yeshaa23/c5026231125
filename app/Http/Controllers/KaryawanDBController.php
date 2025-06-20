<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KaryawanDBController extends Controller
{
    public function karyawan()
    {
        $karyawan = DB::table('karyawan')->get();
        return view('karyawan', ['karyawan' => $karyawan]);
    }

    public function tambahKaryawan()
    {
        return view('tambahKaryawan');
    }

    public function storeKaryawan(Request $request)
    {
        DB::table('karyawan')->insert([
            'kodepegawai' => $request->kodepegawai,
            'namalengkap' => $request->namalengkap,
            'divisi' => $request->divisi,
            'departemen' => $request->departemen
        ]);

        return redirect('/karyawan');
    }

    public function editKaryawan($id)
    {
        $karyawan = DB::table('karyawan')
                    ->where('kodepegawai', $id)
                    ->first();

        return view('editKaryawan', ['karyawan' => $karyawan]);
    }

    public function updateKaryawan(Request $request)
    {
        DB::table('karyawan')
            ->where('kodepegawai', $request->kodepegawai)
            ->update([
                'namalengkap' => $request->namalengkap,
                'divisi' => $request->divisi,
                'departemen' => $request->departemen
            ]);

        return redirect('/karyawan');
    }

    public function hapusKaryawan($id)
    {
        DB::table('karyawan')
            ->where('kodepegawai', $id)
            ->delete();

        return redirect('/karyawan');
    }
}
