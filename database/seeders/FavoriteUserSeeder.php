<?php

namespace Database\Seeders;

use App\Models\FavoriteUser;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FavoriteUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $random_max_num_of_favorites_in_user = 6;
        //each user can have many or none order
        $arr_of_users_id = DB::table("users")
            ->select("id")
            ->pluck("id")
            ->toarray();

        $arr_of_favorites_id = DB::table("favorites")
            ->select("id")
            ->pluck("id")
            ->toarray();

        for ($i = 0; $i < count($arr_of_users_id); $i++) {
            $rand_num_of_favorites = rand(
                $min = 0, //changing to 1 you can disable not favorites ih user
                $max = $random_max_num_of_favorites_in_user
            );
            if ($rand_num_of_favorites == 0) {
                continue;
            }
            $arr_of_random_favorires = array_rand(
                $arr_of_favorites_id,
                $rand_num_of_favorites
            );

            if (is_int($arr_of_random_favorires)) {
                FavoriteUser::create([
                    "favorite_id" =>
                        $arr_of_favorites_id[$arr_of_random_favorires],
                    "user_id" => $arr_of_users_id[$i],
                ]);
                continue;
            }
            for ($j = 0; $j < count($arr_of_random_favorires); $j++) {
                FavoriteUser::create([
                    "favorite_id" =>
                        $arr_of_favorites_id[$arr_of_random_favorires[$j]],
                    "user_id" => $arr_of_users_id[$i],
                ]);
            }
        }
    }
}
