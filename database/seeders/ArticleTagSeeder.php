<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("article_tags")->insert([
            "article_id"=>1,
            "tag_id"=>1,
            "created_at" => now(),
        ]);
        DB::table("article_tags")->insert([
            "article_id"=>1,
            "tag_id"=>5,
            "created_at" => now(),
        ]);
        
        DB::table("article_tags")->insert([
            "article_id"=>2,
            "tag_id"=>5,
            "created_at" => now(),
        ]);
        DB::table("article_tags")->insert([
            "article_id"=>2,
            "tag_id"=>6,
            "created_at" => now(),
        ]);
        DB::table("article_tags")->insert([
            "article_id"=>3,
            "tag_id"=>4,
            "created_at" => now(),
        ]);
        DB::table("article_tags")->insert([
            "article_id"=>3,
            "tag_id"=>3,
            "created_at" => now(),
        ]);
        DB::table("article_tags")->insert([
            "article_id"=>4,
            "tag_id"=>2,
            "created_at" => now(),
        ]);
        DB::table("article_tags")->insert([
            "article_id"=>4,
            "tag_id"=>1,
            "created_at" => now(),
        ]);
        DB::table("article_tags")->insert([
            "article_id"=>5,
            "tag_id"=>6,
            "created_at" => now(),
        ]);
        DB::table("article_tags")->insert([
            "article_id"=>5,
            "tag_id"=>1,
            "created_at" => now(),
        ]);
        DB::table("article_tags")->insert([
            "article_id"=>6,
            "tag_id"=>4,
            "created_at" => now(),
        ]);
        DB::table("article_tags")->insert([
            "article_id"=>6,
            "tag_id"=>2,
            "created_at" => now(),
        ]);
    }
}
