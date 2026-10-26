<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ConstructionExcavatorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Category ID for CONSTRUCTION EXCAVATORS is 19
        $categoryId = 19;

        $products = [
            [
                'name' => 'ZAXIS 140H PRIME',
                'description' => 'Empowering operators with unmatched performance speed.',
            ],
            [
                'name' => 'EX 200 INFRA',
                'description' => "India's most popular 20-ton class excavator, super reliable.",
            ],
            [
                'name' => 'ZAXIS 220 LC PRO',
                'description' => 'Heavy duty GIANT series for aggressive excavation.',
            ],
            [
                'name' => 'ZAXIS 140H ULTRA',
                'description' => 'Empowering operators with unmatched performance speed.',
            ],
            [
                'name' => 'EX 200 LC SUPER',
                'description' => "India's most popular 20-ton class excavator, super reliable.",
            ],
            [
                'name' => 'ZAXIS 33 U',
                'description' => 'Compact mini excavator designed for urban and confined spaces.',
            ],
            [
                'name' => 'EX 130 PRIME',
                'description' => 'Fuel efficient 13-ton class excavator for superior performance.',
            ],
            [
                'name' => 'ZAXIS 370 LCH',
                'description' => 'Large scale mining and quarrying excavator.',
            ],
            [
                'name' => 'ZAXIS 470H',
                'description' => 'Heavy duty large excavator built for maximum durability.',
            ],
        ];

        foreach ($products as $productData) {
            Product::updateOrCreate(
                ['slug' => Str::slug($productData['name'])],
                [
                    'product_category_id' => $categoryId,
                    'name' => $productData['name'],
                    'description' => $productData['description'],
                    'status' => 'active',
                ]
            );
        }
    }
}
