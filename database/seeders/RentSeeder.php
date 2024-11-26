<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class RentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('rents')->insert([
            ['customer_id' => 1, 'book_id' => 1, 'date_rent' => '2024-11-01', 'date_return' => '2024-11-10'],
            ['customer_id' => 2, 'book_id' => 2, 'date_rent' => '2024-11-05', 'date_return' => '2024-11-15'],
        ]);
    }
}
