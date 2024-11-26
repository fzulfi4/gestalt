<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $table = 'buku';  // Nama tabel
    protected $fillable = ['title', 'author', 'price_rent', 'book_category'];

    // Relasi dengan Rent
    public function rents()
    {
        return $this->hasMany(Rent::class);
    }
}
