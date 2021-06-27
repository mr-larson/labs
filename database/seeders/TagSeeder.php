<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("tags")->insert([
            "name"=>"Branding",
            "created_at" => now(),
        ]);
        DB::table("tags")->insert([
            "name"=>"Identity",
            "created_at" => now(),
        ]);
        DB::table("tags")->insert([
            "name"=>"Webdev",
            "created_at" => now(),
        ]);
        DB::table("tags")->insert([
            "name"=>"Video",
            "created_at" => now(),
        ]);
        DB::table("tags")->insert([
            "name"=>"Design",
            "created_at" => now(),
        ]);
        DB::table("tags")->insert([
            "name"=>"Photography",
            "created_at" => now(),
        ]);
    }
}
