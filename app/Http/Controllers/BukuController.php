<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rent;
use App\Models\Customer;
use App\Models\Book;

use Illuminate\Support\Facades\DB;
class BukuController extends Controller
{
    // Menampilkan semua buku yang dirental
    public function index()
    {
        $books = Book::leftJoin('rents', 'buku.id', '=', 'rents.book_id')
            ->get();

        return view('buku', compact('books'));
    }

    // Menampilkan buku yang belum pernah dipinjam
    public function filterUnrented()
    {
        $books = Book::leftJoin('rents', 'buku.id', '=', 'rents.book_id')
            ->whereNull('rents.book_id')
            ->get();

        return view('buku', compact('books'));
    }

    // Menampilkan buku dengan harga sewa antara Rp.2000 dan Rp.6000
    public function filterPrice()
    {
        $books = Book::whereBetween('price_rent', [2000, 6000])
            ->get();

        return view('buku', compact('books'));
    }

    public function frequentCustomers()
    {
        // Mengambil data customer yang meminjam lebih dari 10 buku
        $customers = Customer::join('rents', 'customers.id', '=', 'rents.customer_id')
    ->join('buku', 'rents.book_id', '=', 'buku.id')
    ->select('customers.name', 'buku.title', DB::raw('COUNT(rents.book_id) as book_count'))
    ->groupBy('customers.id', 'customers.name', 'buku.title')  // Include `customers.name` in GROUP BY
    ->having('book_count', '>', 10)
    ->get();
        // Mengirim data ke tampilan
        return view('customers', compact('customers'));
    }
}
