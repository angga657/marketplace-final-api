<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $now = now();
        DB::table('products')->insert([
            'name' => 'Produk A',
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSj9zTsUw9GLhneuaoFGKsx3WAzZc9qE1SK_w&s',
            'brand_id' => 1,
            'category_id' => 1,
            'price' => 100,
            'stock' => 50,
            'created_at' => $now,
            'updated_at' => $now,
        ]);

        DB::table('products')->insert([
            'name' => 'Produk B',
            'image'=> 'https://cdn.antaranews.com/cache/1200x800/2023/03/05/00.jpg',
            'brand_id' => 2,
            'category_id' => 2,
            'price' => 150,
            'stock' => 30,
            'created_at' => $now,
            'updated_at' => $now,
        ]);

        DB::table('products')->insert([
            'name' => 'Produk C',
            'image'=> 'https://ae-pic-a1.aliexpress-media.com/kf/He02931e24f6a48dcab57ad201478e88dh/Gaming-PC-A8-7680-8G-16G-RAM-120G-500G-SSD-Windows-10-Pro-Key-Assembly-Machine.jpg_640x640Q90.jpg_.webp',
            'brand_id' => 3,
            'category_id' => 3,
            'price' => 180,
            'stock' => 40,
            'created_at' => $now,
            'updated_at' => $now,
        ]);

        DB::table('products')->insert([
            'name' => 'Produk D',
            'image'=> 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQL6UMlLegzDvgIUY4lPYjfhzp9kljz02AuHQ&s',
            'brand_id' => 4,
            'category_id' => 4,
            'price' => 200,
            'stock' => 60,
            'created_at' => $now,
            'updated_at' => $now,
        ]);

        DB::table('products')->insert([
            'name' => 'Produk E',
            'image'=> 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRCU0Nx6MD6-PfpoAgZxl1ZBnFx739STolKyQ&s',
            'brand_id' => 5,
            'category_id' => 5,
            'price' => 250,
            'stock' => 80,
            'created_at' => $now,
            'updated_at' => $now,
        ]);
    }
}
