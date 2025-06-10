@extends('template')

@section('content')
    <h3 class="text-center">Data Bis</h3>

    <a href="/bis/tambah" class="btn btn-primary mb-3">+ Tambah Bis Baru</a>

    <form method="GET" action="/bis/cari" class="form-inline mb-3">
        <input type="text" name="cari" class="form-control mr-2" placeholder="Cari Merk Bis ..." value="{{ request()->cari }}">
        <button type="submit" class="btn btn-info">CARI</button>
    </form>

    <div class="table-responsive">
        <table class="table table-bordered mt-2">
            <thead class="thead-dark">
                <tr>
                    <th>Merk Bis</th>
                    <th>Harga</th>
                    <th>Tersedia</th>
                    <th>Berat</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($bis as $b)
                <tr>
                    <td>{{ $b->merkbis }}</td>
                    <td>{{ number_format($b->hargabis, 0, ',', '.') }}</td>
                    <td>{{ $b->tersedia ? 'Ya' : 'Tidak' }}</td>
                    <td>{{ number_format($b->berat, 2, ',', '.') }} kg</td>
                    <td>
                        <a href="/bis/edit/{{ $b->id }}" class="btn btn-success btn-sm">Edit</a>
                        <a href="/bis/hapus/{{ $b->id }}" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus?')">Hapus</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    {{ $bis->links() }}
@endsection
