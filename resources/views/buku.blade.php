@extends('layouts.app')

@section('content')
    <h1 class="text-center mb-4 text-primary">Daftar Buku yang Dirental</h1>

    <div class="d-flex justify-content-between mb-4">
        <!-- Button to navigate to Frequent Customers -->
        <a href="{{ route('customer.frequent') }}" class="btn btn-primary">
            Lihat Customer yang Meminjam Lebih dari 10 Kali
        </a>

        <!-- Button to filter books that have never been rented -->
        <a href="{{ route('buku.filter.unrented') }}" class="btn btn-warning">
            Buku yang Belum Pernah Dipinjam
        </a>


    </div>

    <!-- Table to display books -->
    <div class="table-responsive mt-10">
        <table class="table table-striped table-bordered table-hover">
            <thead class="thead-dark">
                <tr>
                    <th>Judul Buku</th>
                    <th>Penulis</th>
                    <th>Kategori</th>
                    <th>Harga Sewa</th>
                    <th>Status Peminjaman</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($books as $book)
                    <tr>
                        <td>{{ $book->title }}</td>
                        <td>{{ $book->author }}</td>
                        <td>{{ $book->book_category }}</td>
                        <td>Rp. {{ number_format($book->price_rent, 2, ',', '.') }}</td>
                        <td>
                            @if($book->date_rent)
                                Sudah Dipinjam ({{ $book->date_rent }})
                            @else
                                <span class="text-danger">Belum Pernah Dipinjam</span>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
