@extends('template')

@section('content')
    <h3>Edit Karyawan</h3>
    <a href="/karyawan" class="btn btn-info btn-sm mb-3">&lt; Kembali</a>
    <br>
    <br>

    <form action="/karyawan/updateKaryawan" method="post" class="col-md-8 mx-auto">
        {{ csrf_field() }}

        <div class="form-group">
            <label for="kodepegawai">Kode Karyawan</label>
            <input class="form-control"
                type="text"
                id="kodepegawai"
                name="kodepegawai"
                value="{{ $karyawan->kodepegawai }}"
                readonly>
        </div>

        <div class="form-group">
            <label for="namalengkap">Nama Lengkap</label>
            <input class="form-control"
                type="text"
                id="namalengkap"
                name="namalengkap"
                value="{{ $karyawan->namalengkap }}"
                required>
        </div>

        <div class="form-group">
            <label for="divisi">Divisi</label>
            <input class="form-control"
                type="text"
                id="divisi"
                name="divisi"
                value="{{ $karyawan->divisi }}"
                required>
        </div>

        <div class="form-group">
            <label for="departemen">Departemen</label>
            <input class="form-control"
                type="number"
                id="departemen"
                name="departemen"
                value="{{ $karyawan->departemen }}"
                required>
        </div>

        <button type="submit" class="btn btn-success">Simpan Data</button>
    </form>
@endsection
