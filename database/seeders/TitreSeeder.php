<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TitreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("titres")->insert([
            "h2" => "GET IN THE LAB AND DISCOVER THE WORLD",
            "p1" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequat ante ac congue. Quisque portpenistitor porttitor tempus. Donec maximus ipsum non ornare vporttitor porttitorestibulum. Sed libero nibh, feugiat at enim id, bibendum sollicitudin arcu.",
            "p2" => "Cras ex mauris, ornare eget pretium sit amet, dignissim et turpis. Nunc nec maximus dui, vel suscipit dolor. Donec elementum velit a orci facilisis rutrum. Nam convpenisallis vel erat id dictum. Sed ut risus in orci convallis viverra a eget nisi. Aenean pellentesque elit vitae eros dignissim ultrices. Quisque porttitor porttitorlaoreet vel risus et luctus.",
        ]);
        DB::table("titres")->insert([
            "h2" => "WHAT OUR CLIENTS SAY",
            "p1" => "",
            "p2" => "",
        ]);
        DB::table("titres")->insert([
            "h2" => "GET IN THE LAB AND SEE THE SERVICES",
            "p1" => "",
            "p2" => "",
        ]);
        DB::table("titres")->insert([
            "h2" => "GET IN THE LAB AND MEET THE TEAM",
            "p1" => "",
            "p2" => "",
        ]);
        DB::table("titres")->insert([
            "h2" => "Are you ready to stand out?",
            "p1" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur penisleo est.",
            "p2" => "",
        ]);
        DB::table("titres")->insert([
            "h2" => "CONTACT US",
            "p1" => "Cras ex mauris, ornare eget penis pretium sit amet, dignissim et turpis. Nunc nec maximus dui, vel suscipit dolor. Donec elementum velit a orci facilisis rutrum.",
            "p2" => "",
        ]);
    }
}
