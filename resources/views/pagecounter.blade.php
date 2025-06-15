@extends('template')

@section('content')
    <style>
        .counter {
            background-color: #d4edda; /* hijau lembut */
            color: #155724;
            border-radius: 5px;
            padding: 20px 40px;
            font-size: 20px;
            width: fit-content;
            margin: 60px auto;
            border: 1px solid #c3e6cb;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
        }
    </style>

    <div class="counter">
        Anda Pengunjung ke: <strong>{{ $jumlah }}</strong>
    </div>
@endsection
