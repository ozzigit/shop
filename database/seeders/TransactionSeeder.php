<?php

namespace Database\Seeders;

use App\Models\Order;
use App\Models\Transaction;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $random_max_transactions = 8;
        $arr_of_orders_id = DB::table("orders")
            ->select("id")
            ->pluck("id")
            ->toarray();

        //randomizing num of existing orders
        $rand_num_of_orders = rand($min = 2, $max = $random_max_transactions);
        $arr_of_random_orsers = array_rand(
            $arr_of_orders_id,
            $rand_num_of_orders
        );
        for ($i = 0; $i < count($arr_of_random_orsers); $i++) {
            Transaction::create([
                "order_id" => $arr_of_orders_id[$arr_of_random_orsers[$i]],
                "user_id" => DB::table("orders")
                    ->where("id", $arr_of_orders_id[$arr_of_random_orsers[$i]])
                    ->pluck("user_id")
                    ->first(),
                "type" => random_int(0, 4),
                "status" => random_int(0, 4),
            ]);
        }
    }
}
