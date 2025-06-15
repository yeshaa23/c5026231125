@extends('template')

@section('content')
    <h3 class="text-center">Edit Pegawai</h3>

    <a href="/pegawai" class="btn btn-info btn-sm mb-3">&lt; Kembali</a>

    <form action="/pegawai/update" method="post" class="col-md-8 mx-auto">
        @csrf

        <input type="hidden" name="id" value="{{ $pegawai->pegawai_id }}">

        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text"
                    name="nama"
                    id="nama"
                    class="form-control"
                    required
                    value="{{ $pegawai->pegawai_nama }}">
        </div>

        <div class="form-group">
            <label for="jabatan">Jabatan</label>
            <input type="text"
                    name="jabatan"
                    id="jabatan"
                    class="form-control"
                    required
                    value="{{ $pegawai->pegawai_jabatan }}">
        </div>

        <div class="form-group">
            <label for="umur">Umur</label>
            <input type="number"
                    name="umur"
                    id="umur"
                    class="form-control"
                    required
                    value="{{ $pegawai->pegawai_umur }}">
        </div>

        <div class="form-group">
            <label for="alamat">Alamat</label>
            <textarea name="alamat"
                        id="alamat"
                        class="form-control"
                        required>{{ $pegawai->pegawai_alamat }}</textarea>
        </div>

        <button type="submit" class="btn btn-success">Simpan Data</button>
    </form>
@endsection
