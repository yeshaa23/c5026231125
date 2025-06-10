@extends('template')

@section('content')
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <h3 class="text-center">Tambah Bis</h3>

    <form method="POST" action="/bis/store" class="col-md-6 mx-auto">
        @csrf
        <div class="form-group">
            <label for="merkbis">Merk Bis</label>
            <input type="text" name="merkbis" class="form-control" placeholder="Merk Bis" required>
        </div>
        <div class="form-group">
            <label for="hargabis">Harga Bis</label>
            <input type="number" name="hargabis" class="form-control" placeholder="Harga Bis (tulis tanpa titik, co : 120000000)" required>
        </div>
        <div class="form-group">
            <label for="berat">Berat (kg)</label>
            <input type="number" step="0.01" name="berat" class="form-control" placeholder="Berat Bis (tulis angka)" required>
        </div>
        <div class="form-group">
            <label><input type="checkbox" name="tersedia"> Tersedia</label>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>

    <a href="/bis" class="btn btn-secondary mt-3">Kembali</a>
@endsection
