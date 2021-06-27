<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("categories")->insert([
            "name"=>"Inspiration",
            "created_at" => now(),
        ]);
        DB::table("categories")->insert([
            "name"=>"Apprentissage",
            "created_at" => now(),
        ]);
        DB::table("categories")->insert([
            "name"=>"Motivation",
            "created_at" => now(),
        ]);
        DB::table("categories")->insert([
            "name"=>"Événement",
            "created_at" => now(),
        ]);
    }
}
