<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $max_fake_reviews_count = 4;
        $product_count = Product::count();
        for ($i = 0; $i < $product_count; $i++) {
            $product = Product::inRandomOrder()->first();
            Review::factory()
                ->count(rand(1, $max_fake_reviews_count))
                ->for($product)
                ->create();
        }
    }
}
