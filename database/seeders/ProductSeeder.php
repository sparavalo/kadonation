<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->delete();

        $products = [
            [
                'name' => 'Fifa 2012',
                'category_id' => 1,
                'sku' => 'A0001',
                'price' => 6999,
                'quantity' => 20
            ],
            [
                'name' => 'Assasin’s Creed 5',
                'category_id' => 1,
                'sku' => 'A0002',
                'price' => 7999,
                'quantity' => 15
            ],
            [
                'name' => 'Asus Zenbook 13\'\' - Aluminum',
                'category_id' => 2,
                'sku' => 'A0003',
                'price' => 139999,
                'quantity' => 10
            ],
            [
                'name' => 'Sony UHD HDR 55\'\' 4k TV ',
                'category_id' => 3,
                'sku' => 'A0004',
                'price' => 239999,
                'quantity' => 5
            ],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }

    }
}
