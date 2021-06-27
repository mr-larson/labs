<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("article_categories")->insert([
            "article_id"=>1,
            "category_id"=>3,
            "created_at" => now(),
        ]);
        
        DB::table("article_categories")->insert([
            "article_id"=>1,
            "category_id"=>2,
            "created_at" => now(),
        ]);
        DB::table("article_categories")->insert([
            "article_id"=>2,
            "category_id"=>1,
            "created_at" => now(),
        ]);

        DB::table("article_categories")->insert([
            "article_id"=>2,
            "category_id"=>4,
            "created_at" => now(),
        ]);
        DB::table("article_categories")->insert([
            "article_id"=>3,
            "category_id"=>4,
            "created_at" => now(),
        ]);

        DB::table("article_categories")->insert([
            "article_id"=>3,
            "category_id"=>3,
            "created_at" => now(),
        ]);
        DB::table("article_categories")->insert([
            "article_id"=>4,
            "category_id"=>2,
            "created_at" => now(),
        ]);

        DB::table("article_categories")->insert([
            "article_id"=>4,
            "category_id"=>3,
            "created_at" => now(),
        ]);
        DB::table("article_categories")->insert([
            "article_id"=>5,
            "category_id"=>3,
            "created_at" => now(),
        ]);

        DB::table("article_categories")->insert([
            "article_id"=>5,
            "category_id"=>4,
            "created_at" => now(),
        ]);
        DB::table("article_categories")->insert([
            "article_id"=>6,
            "category_id"=>3,
            "created_at" => now(),
        ]);

        DB::table("article_categories")->insert([
            "article_id"=>6,
            "category_id"=>1,
            "created_at" => now(),
        ]);
    }
}
