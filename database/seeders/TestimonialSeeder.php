<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("testimonials")->insert([
            "p" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.",
            "img" => "01.jpg",
            "h2" => "Michael Smith",
            "p2" => "CEO Company",
        ]);

        DB::table("testimonials")->insert([
            "p" => "Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.",
            "img" => "02.jpg",
            "h2" => "Michael Smith",
            "p2" => "CEO Company",
        ]);

        DB::table("testimonials")->insert([
            "p" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.",
            "img" => "01.jpg",
            "h2" => "Michael Smith",
            "p2" => "CEO Company",
        ]);

        DB::table("testimonials")->insert([
            "p" => "Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.",
            "img" => "02.jpg",
            "h2" => "Michael Smith",
            "p2" => "CEO Company",
        ]);

        DB::table("testimonials")->insert([
            "p" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.",
            "img" => "01.jpg",
            "h2" => "Michael Smith",
            "p2" => "CEO Company",
        ]);

        DB::table("testimonials")->insert([
            "p" => "Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.",
            "img" => "02.jpg",
            "h2" => "Michael Smith",
            "p2" => "CEO Company",
        ]);
    }
}
