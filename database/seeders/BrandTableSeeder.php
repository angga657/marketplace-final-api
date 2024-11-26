<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $now = now();
        DB::table('brands')->insert([
            'brand_name' => 'Acer',
            'created_at' => $now,
            'updated_at' => $now,
        ]);

        DB::table('brands')->insert([
            'brand_name' => 'Asus',
            'created_at' => $now,
            'updated_at' => $now,
        ]);

        DB::table('brands')->insert([
            'brand_name' => 'Lenovo',
            'created_at' => $now,
            'updated_at' => $now,
        ]);

        DB::table('brands')->insert([
            'brand_name' => 'Axio',
            'created_at' => $now,
            'updated_at' => $now,
        ]);

        DB::table('brands')->insert([
            'brand_name' => 'HP',
            'created_at' => $now,
            'updated_at' => $now,
        ]);
    }
}
