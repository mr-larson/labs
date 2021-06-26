<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("comments")->insert([
            "created_at"=>now(),

            "p" => "Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique.",

            'article_id'=>'5',

            'user_id'=>'1'
        ]);

        DB::table("comments")->insert([
            "created_at"=>now(),

            "p" => "Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique.",

            'article_id'=>'4',

            'user_id'=>'2'
        ]);

        DB::table("comments")->insert([
            "created_at"=>now(),

            "p" => "Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique.",

            'article_id'=>'3',

            'user_id'=>'3'
        ]);

        DB::table("comments")->insert([
            "created_at"=>now(),

            "p" => "Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique.",

            'article_id'=>'2',

            'user_id'=>'4'
        ]);

        DB::table("comments")->insert([
            "created_at"=>now(),

            "p" => "Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique.",

            'article_id'=>'1',

            'user_id'=>'5'
        ]);

        DB::table("comments")->insert([
            "created_at"=>now(),

            "p" => "Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique.",

            'article_id'=>'1',

            'user_id'=>'1'
        ]);
    }
}
