<?php

namespace Database\Seeders;

use App\Models\OrderProduct;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $random_max_num_of_products_in_order = 9;
        $random_max_num_of_quantity_products_in_order = 550;
        //each user can have many or none order
        $arr_of_products_id = DB::table("products")
            ->select("id")
            ->pluck("id")
            ->toarray();

        $arr_of_orders_id = DB::table("orders")
            ->select("id")
            ->pluck("id")
            ->toarray();

        for ($i = 0; $i < count($arr_of_orders_id); $i++) {
            $rand_num_of_products = rand(
                $min = 0, //changing to 1 you can disable not carted products
                $max = $random_max_num_of_products_in_order
            );
            if ($rand_num_of_products == 0) {
                continue;
            }
            $arr_of_random_products = array_rand(
                $arr_of_products_id,
                $rand_num_of_products
            );

            if (is_int($arr_of_random_products)) {
                OrderProduct::create([
                    "product_id" =>
                        $arr_of_products_id[$arr_of_random_products],
                    "order_id" => $arr_of_orders_id[$i],
                    "created_at" => now()->addDay(-rand(0, 20)),
                ]);
                continue;
            }
            for ($j = 0; $j < count($arr_of_random_products); $j++) {
                OrderProduct::create([
                    "product_id" =>
                        $arr_of_products_id[$arr_of_random_products[$j]],
                    "order_id" => $arr_of_orders_id[$i],
                    "quantity" => rand(
                        0,
                        $random_max_num_of_quantity_products_in_order
                    ),
                    "created_at" => now()->addDay(-rand(0, 20)),
                ]);
            }
        }
    }
}
