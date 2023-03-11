<?php

namespace Database\Seeders;

use App\Models\Favorite;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FavoriteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //count of favorites is same as count products
        $arr_of_products_id = DB::table("products")
            ->select("id")
            ->pluck("id")
            ->toarray();

        for ($i = 0; $i < count($arr_of_products_id); $i++) {
            Favorite::create([
                "product_id" => $arr_of_products_id[$i],
            ]);
        }
    }
}
