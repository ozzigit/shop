<?php

namespace Database\Seeders;

use App\Models\CategoryProduct;
use Exception;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $random_max_num_of_categoies_in_product = 2;
        //each user can have many or none order
        $arr_of_products_id = DB::table("products")
            ->select("id")
            ->pluck("id")
            ->toarray();

        $arr_of_categories_id = DB::table("categories")
            ->select("id")
            ->pluck("id")
            ->toarray();

        for ($i = 0; $i < count($arr_of_products_id); $i++) {
            //randomizing num of existing orders
            $rand_num_of_categories = rand(
                $min = 0, //changing to 1 you can disable not categoried products
                $max = $random_max_num_of_categoies_in_product
            );
            if ($rand_num_of_categories == 0) {
                continue;
            }
            $arr_of_random_categories = array_rand(
                $arr_of_categories_id,
                $rand_num_of_categories
            );

            if (is_int($arr_of_random_categories)) {
                CategoryProduct::create([
                    "category_id" =>
                        $arr_of_categories_id[$arr_of_random_categories],
                    "product_id" => $arr_of_products_id[$i],
                ]);
                continue;
            }
            for ($j = 0; $j < count($arr_of_random_categories); $j++) {
                CategoryProduct::create([
                    "category_id" =>
                        $arr_of_categories_id[$arr_of_random_categories[$j]],
                    "product_id" => $arr_of_products_id[$i],
                ]);
            }
        }
    }
}
