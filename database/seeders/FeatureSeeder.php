<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("features")->insert([
            "h2" => "Get in the lab",
            "p" => "Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec",
            "i" => "flaticon-002-caliper"
        ]);
        DB::table("features")->insert([
            "h2" => "Projects online",
            "p" => "Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec",
            "i" => "flaticon-019-coffee-cup"
        ]);
        DB::table("features")->insert([
            "h2" => "SMART MARKETING",
            "p" => "Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec",
            "i" => "flaticon-020-creativity"
        ]);
        DB::table("features")->insert([
            "h2" => "Get in the lab",
            "p" => "Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec",
            "i" => "flaticon-037-idea"
        ]);
        DB::table("features")->insert([
            "h2" => "Projects online",
            "p" => "Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec",
            "i" => "flaticon-025-imagination"
        ]);
        DB::table("features")->insert([
            "h2" => "SMART MARKETING",
            "p" => "Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec",
            "i" => "flaticon-008-team"
        ]);
    }
}
