<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('buku')->insert([
            ['title' => 'Naruto', 'author' => 'Masashi Kishimoto', 'price_rent' => 5000, 'book_category' => 'MANGA'],
            ['title' => 'Laskar Pelangi', 'author' => 'Andrea Hirata', 'price_rent' => 3000, 'book_category' => 'NOVEL'],
            ['title' => 'Time Magazine', 'author' => 'Time Inc.', 'price_rent' => 2500, 'book_category' => 'MAGAZINE'],
        ]);
    }
}
