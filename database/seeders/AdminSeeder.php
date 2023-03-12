<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Admin::create([
            "name" => "admin",
            "email" => "admin@ukr.net",
            "password" => bcrypt("secret"),
        ]);
    }
}
