<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            'name' => 'Dangote Cement',
            'price' => 5100,
            'sold' => 0,
        ]);
        DB::table('categories')->insert([
            'name' => 'Lafarge Cement',
            'price' => 5000,
            'sold' => 0,
        ]);
        DB::table('categories')->insert([
            'name' => 'BUA Cement',
            'price' => 5200,
            'sold' => 0,
        ]);
    }
}
