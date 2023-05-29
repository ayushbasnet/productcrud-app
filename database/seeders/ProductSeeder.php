<?php

namespace Database\Seeders;
use App\Models\Product;
use App\Models\Category;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $categorys = Category::pluck('id');
        Product::factory()
            ->count(20)
            ->create([
                'category_id' => $categorys->random(),
            ]);


        // Product::factory()
        //     ->count(20)
        //     ->create();
    }
}
