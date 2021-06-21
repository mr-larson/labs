<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FooterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("footers")->insert([
            "h2" => "2017 All rights reserved. Designed by",
            "a" => "https://colorlib.com",
            "span" => "Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi",
        ]);
    }
}
