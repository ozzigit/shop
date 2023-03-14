<?php

namespace Database\Seeders;

// use App\Constants\DbConstants;
use App\Models\Order;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $random_max_num_of_user_orders = 6;
        //each user can have many or none order
        $arr_of_users_id = DB::table("users")
            ->select("id")
            ->pluck("id")
            ->toarray();

        for ($i = 0; $i < count($arr_of_users_id); $i++) {
            //randomizing num of existing orders
            $rand_num_of_orders = rand(
                $min = 0,
                $max = $random_max_num_of_user_orders
            );
            for ($j = 0; $j < $rand_num_of_orders; $j++) {
                Order::create([
                    "user_id" => $arr_of_users_id[$i],
                    "status" => rand($min = 0, $max = 4),
                ]);
            }
        }
    }
}
