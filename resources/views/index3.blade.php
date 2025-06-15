@extends('template')

@section('content')
    <h3 class="text-center">Data Keranjang Belanja</h3>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <br/>
    <a href="/keranjangbelanja/beli" class="btn btn-success btn-sm">Beli</a>
    <br/>
    <br/>

    <div class="table-responsive">
        <table class="table table-bordered table-striped mt-2">
            <thead>
                <tr>
                    <th>Kode Pembelian</th>
                    <th>Kode Barang</th>
                    <th>Jumlah Pembelian</th>
                    <th>Harga per item</th>
                    <th>Total</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($keranjangbelanja as $b)
                    <tr>
                        <td>{{ $b->ID }}</td>
                        <td>{{ $b->KodeBarang }}</td>
                        <td>{{ $b->Jumlah }}</td>
                        <td>Rp {{ number_format($b->Harga, 0, ',', '.') }}</td>
                        <td>Rp {{ number_format($b->Jumlah * $b->Harga, 0, ',', '.') }}</td>
                        <td>
                            <a href="/keranjangbelanja/hapus/{{ $b->ID }}" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus?')">Hapus</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $keranjangbelanja->links() }}
    </div>
@endsection
