@extends('template')

@section('content')
<h3>Edit Data Karyawan</h3>
<a href="/eas" class="btn btn-secondary btn-sm mb-3">&lt; Kembali</a>

<form action="/eas/update" method="post" class="col-md-8 mx-auto">
    @csrf
    <div class="form-group">
        <label for="kodepegawai">Kode Pegawai</label>
        <input type="text" class="form-control" name="kodepegawai" id="kodepegawai" value="{{ $mykaryawan->kodepegawai }}" readonly>
    </div>

    <div class="form-group">
        <label for="namalengkap">Nama Lengkap</label>
        <input type="text" class="form-control" name="namalengkap" id="namalengkap" value="{{ $mykaryawan->namalengkap }}" required>
    </div>

    <div class="form-group">
        <label for="divisi">Divisi</label>
        <input type="text" class="form-control" name="divisi" id="divisi" value="{{ $mykaryawan->divisi }}" required>
    </div>

    <div class="form-group">
        <label for="departemen">Departemen</label>
        <input type="text" class="form-control" name="departemen" id="departemen" value="{{ $mykaryawan->departemen }}" required>
    </div>

    <button type="submit" class="btn btn-success mt-3">Simpan Perubahan</button>
</form>
@endsection
