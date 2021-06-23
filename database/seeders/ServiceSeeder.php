<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("services")->insert([
            "i" => "flaticon-023-flask",
            "h2" => "Get in the lab",
            "p" => "Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec",
        ]);
        DB::table("services")->insert([
            "i" => "flaticon-011-compass",
            "h2" => "Projects online",
            "p" => "Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec",
        ]);
        DB::table("services")->insert([
            "i" => "flaticon-037-idea",
            "h2" => "SMART MARKETING",
            "p" => "Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec",
        ]);
        DB::table("services")->insert([
            "i" => "flaticon-039-vector",
            "h2" => "Social Media",
            "p" => "Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec",
        ]);
        DB::table("services")->insert([
            "i" => "flaticon-036-brainstorming",
            "h2" => "Brainstorming",
            "p" => "Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec",
        ]);
        DB::table("services")->insert([
            "i" => "flaticon-026-search",
            "h2" => "Documented",
            "p" => "Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec",
        ]);
        DB::table("services")->insert([
            "i" => "flaticon-018-laptop-1",
            "h2" => "Responsive",
            "p" => "Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec",
        ]);
        DB::table("services")->insert([
            "i" => "flaticon-043-sketch",
            "h2" => "Retina ready",
            "p" => "Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec",
        ]);
        DB::table("services")->insert([
            "i" => "flaticon-012-cube",
            "h2" => "Ultra modern",
            "p" => "Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec",
        ]);
    }
}
