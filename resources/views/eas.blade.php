@extends('template')

@section('content')
<h3 class="text-center">Data Karyawan</h3>
<br/>

<table class="table table-striped table-hover">
    <tr>
        <th>Kode Karyawan</th>
        <th>Nama Lengkap</th>
        <th>Divisi</th>
        <th>Departemen</th>
        <th>Opsi</th>
    </tr>
    @foreach($mykaryawan as $kar)
    <tr>
        <td>{{ $kar->kodepegawai }}</td>
        <td>{{ ucwords(strtolower($kar->namalengkap)) }}</td>
        <td>{{ $kar->divisi }}</td>
        <td>{{ $kar->departemen }}</td>
        <td>
            <a href="/eas/edit/{{ $kar->kodepegawai }}" class="btn btn-success btn-sm">Edit</a>
            <a href="/eas/view/{{ $kar->kodepegawai }}" class="btn btn-info btn-sm">View</a>
        </td>
    </tr>
    @endforeach
</table>
@endsection
