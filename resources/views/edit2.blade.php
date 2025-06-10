@extends('template')

@section('content')
    <h3>Edit Bis</h3>

    <form method="POST" action="/bis/update/{{ $bis->id }}">
        @csrf
        <div class="form-group">
            <label for="merkbis">Merk Bis</label>
            <input type="text" name="merkbis" class="form-control" value="{{ $bis->merkbis }}" required>
        </div>
        <div class="form-group">
            <label for="hargabis">Harga Bis</label>
            <input type="number" name="hargabis" class="form-control" value="{{ $bis->hargabis }}" required>
        </div>
        <div class="form-group">
            <label for="berat">Berat (kg)</label>
            <input type="number" step="0.01" name="berat" class="form-control" value="{{ $bis->berat }}" required>
        </div>
        <div class="form-group">
            <label><input type="checkbox" name="tersedia" {{ $bis->tersedia ? 'checked' : '' }}> Tersedia</label>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>

    <a href="/bis" class="btn btn-secondary mt-3">Kembali</a>
@endsection
