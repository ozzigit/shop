<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $fake_users_count = 10;
        User::create([
            "name" => "ozzi",
            "email" => "ozzi@ukr.net",
            "password" => bcrypt("secret"),
        ]);
        User::factory($fake_users_count)->create();
    }
}
