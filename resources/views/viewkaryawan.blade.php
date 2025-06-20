@extends('template')

@section('content')
<div class="col-md-8 mx-auto">
    <h3>Detail Karyawan</h3>
    <div class="mb-2"><label for="kodepegawai">Kode Pegawai</label> {{ $mykaryawan->kodepegawai }}</div>
    <div class="mb-2"><label for="namalengkap">Nama Lengkap</label> {{ $mykaryawan->namalengkap }}</div>
    <div class="mb-2"><label for="divisi">Divisi</label>  {{ $mykaryawan->divisi }}</div>
    <div class="mb-2"><label for="departemen">Departemen</label>  {{ $mykaryawan->departemen }}</div>
    <a href="/eas" class="btn btn-secondary mt-3">Kembali</a>

</div>
@endsection
