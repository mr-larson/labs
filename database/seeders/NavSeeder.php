<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NavSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("navs")->insert([
            "li" => "Home",
        ]);
        DB::table("navs")->insert([
            "li" => "Services",
        ]);
        DB::table("navs")->insert([
            "li" => "Blog",
        ]);
        DB::table("navs")->insert([
            "li" => "Contact",
        ]);
    }
}
