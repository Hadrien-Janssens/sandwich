<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products =   [
            [
                'name' => 'Jambon &/ou fromage',
                'price_normal' => 3.20,
                'price_big' => 4.00,
                'category_id' => 2,
            ],
            [
                'name' => 'Bacon',
                'price_normal' => 3.90,
                'price_big' => 4.70,
                'category_id' => 2,
            ],
            [
                'name' => 'coca-cola',
                'price_normal' => 2,
                'category_id' => 1,
            ]
        ];
        foreach ($products as $product) {
            \App\Models\Product::create($product);
        }
    }
}