<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $table = 'customers';  // Nama tabel
    protected $fillable = ['name', 'identity_card_number', 'address'];

    // Relasi dengan Rent
    public function rents()
    {
        return $this->hasMany(Rent::class);
    }
}
