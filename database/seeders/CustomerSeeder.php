<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('customers')->insert([
            ['name' => 'John Doe', 'identity_card_number' => '1234567890', 'address' => 'Jl. ABC No.1'],
            ['name' => 'Jane Smith', 'identity_card_number' => '9876543210', 'address' => 'Jl. XYZ No.2'],
        ]);
    }
}
