<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'name' => 'Oppo mobile',
                'price' => '300',
                'description' => 'A smartphone with 8gb ram',
                'category'  => 'mobile',
                'gallery' => 'https://image.oppo.com/content/dam/oppo/in/mkt/homepage-new-version/feature/Products-f21-pro-5g.png.thumb.webp'
            ],
            [
                'name' => 'Panasonic TV',
                'price' => '400',
                'description' => 'A smart Tv with 8gb ROM',
                'category'  => 'tv',
                'gallery' => 'https://5.imimg.com/data5/BC/WD/MY-29094786/panasonic-led-television-1000x1000.jpg'
            ],
            [
                'name' => 'Sony TV',
                'price' => '500',
                'description' => 'A smart Tv with 8gb ROM sony',
                'category'  => 'tv',
                'gallery' => 'https://cdn1.smartprix.com/rx-iSUL96nlp-w420-h420/sony-kdl-32w6103-32.webp'
            ],
            [
                'name' => 'LG fridge',
                'price' => '200',
                'description' => 'A fridge with more feature',
                'category'  => 'fridge',
                'gallery' => 'https://m.media-amazon.com/images/I/41-IBQ%2BX1ZL._SY445_SX342_QL70_FMwebp_.jpg'
            ],
        ]);
    }
}
