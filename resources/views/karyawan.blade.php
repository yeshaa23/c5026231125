@extends('template')

@section('content')
<h3 class="text-center">Data Karyawan</h3>
<br/>
<a href="/karyawan/tambahKaryawan" class="btn btn-primary"> + Tambah Karyawan Baru</a>
<br/>
<br/>
<table class="table table-striped table-hover">
    <tr>
        <th>Kode Karyawan</th>
        <th>Nama Lengkap</th>
        <th>Divisi</th>
        <th>Departemen</th>
        <th>Opsi</th>
    </tr>
    @foreach($karyawan as $kar)
    <tr>
        <td>{{ $kar->kodepegawai }}</td>
        <td>{{ strtoupper($kar->namalengkap) }}</td>
        <td>{{ $kar->divisi }}</td>
        <td>{{ strtolower($kar->departemen) }}</td>
        <td>
            <a href="/karyawan/editKaryawan/{{ $kar->kodepegawai }}" class="btn btn-success">Edit</a>
            <a href="/karyawan/hapusKaryawan/{{ $kar->kodepegawai }}" class="btn btn-danger">Hapus</a>
        </td>
    </tr>
    @endforeach
</table>

<br/>
{{ $karyawan->links() }}
@endsection
