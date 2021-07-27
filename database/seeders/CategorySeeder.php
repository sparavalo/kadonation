<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->delete();

        $categories = ['Games', 'Computers', 'TVs and Accessories'];

        foreach ($categories as $category) {
            Category::create(['name' => $category]);
        }
    }
}
