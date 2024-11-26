@extends('layouts.app')

@section('content')

<h1>Customer yang Meminjam Buku Lebih dari 10 Kali</h1>

<!-- Tabel untuk menampilkan data customer -->
<a href="{{ route('buku.index') }}">
    <button type="button" class="btn btn-danger" style="margin-bottom: 10px;">Kembali ke Daftar Buku</button>
</a>
<table border="1" cellpadding="5" cellspacing="0" style="margin-top: 20px;">
    <thead>
        <tr>
            <th>Nama Customer</th>
            <th>Judul Buku</th>
            <th>Jumlah Buku yang Dipinjam</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($customers as $customer)
            <tr>
                <td>{{ $customer->name }}</td>
                <td>{{ $customer->title }}</td>
                <td>{{ $customer->book_count }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
