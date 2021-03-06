<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("images")->insert([
            "img" => "big-logo.png",
        ]);
        DB::table("images")->insert([
            "img" => "test-man_2.png",
        ]);
        DB::table("images")->insert([
            "img" => "device.png",
        ]);
        DB::table("images")->insert([
            "img" => "logo.png",
        ]);
    }
}
