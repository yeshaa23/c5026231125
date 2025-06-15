@extends('template')

@section('content')
    <h3 class="text-center">Tambah Keranjang</h3>

    <form method="POST" action="/keranjangbelanja/store" class="col-md-6 mx-auto">
        @csrf
        <div class="form-group">
            <label for="ID">Kode Pembelian</label>
            <input type="text" name="ID" class="form-control" value="{{ $autoID }}" readonly>
        </div>
        <div class="form-group">
            <label for="KodeBarang">Kode Barang</label>
            <input type="text" name="KodeBarang" class="form-control" placeholder="Masukkan kode barang" required>
        </div>
        <div class="form-group">
            <label for="Jumlah">Jumlah Pembelian</label>
            <input type="text" id="Jumlah" name="Jumlah" class="form-control" placeholder="Masukkan jumlah pembelian (tulis dalam angka, co: 1, 2, 3)" required>
        </div>
        <div class="form-group">
            <label for="Harga">Harga per item</label>
            <input type="text" id="Harga" name="Harga" class="form-control" placeholder="Masukkan harga barang (tulis tanpa titik, co : 120000000)" required>
        </div>
        <div class="form-group">
            <label for="TotalPreview">Total Harga</label>
            <input type="text" id="TotalPreview" class="form-control" readonly style="background-color: #f0f8ffad; font-weight: bold;">
        </div>
        <button type="submit" class="btn btn-primary mt-3">Simpan</button>
    </form>

    <a href="/keranjangbelanja" class="btn btn-secondary mt-3">Kembali</a>

    <script>
    const jumlahInput = document.getElementById('Jumlah');
    const hargaInput = document.getElementById('Harga');
    const totalPreview = document.getElementById('TotalPreview');

    function hitungTotal() {
        const jumlah = parseInt(jumlahInput.value) || 0;
        const harga = parseInt(hargaInput.value) || 0;
        const total = jumlah * harga;
        totalPreview.value = 'Rp ' + total.toLocaleString('id-ID');
    }

    jumlahInput.addEventListener('input', hitungTotal);
    hargaInput.addEventListener('input', hitungTotal);
</script>

@endsection
