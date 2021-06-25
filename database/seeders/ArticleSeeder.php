<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("articles")->insert([
            "h2" => "Just a simple blog post",
            "day" => "03",
            "h3" => "Nov 2017",
            "p1" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Phasellus vestibulum, quam tincidunt venenatis ultrices, est libero mattis ante, ac consectetur diam neque eget quam. Etiam feugiat augue et varius blandit. Praesent mattis, eros a sodales commodo.",
            "p2" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vestibulum, quam tincidunt venenatis ultrices, est libero mattis ante, ac consectetur diam neque eget quam. Etiam feugiat augue et varius blandit. Praesent mattis, eros a sodales commodo, justo ipsum rutrum mauris, sit amet egestas metus quam sed dolor. Sed consectetur, dui sed sollicitudin eleifend, arcu neque egestas lectus, sagittis viverra justo massa ut sapien. Aenean viverra ornare mauris eget lobortis. Cras vulputate elementum magna, tincidunt pharetra erat condimentum sit amet. Maecenas vitae ligula pretium, convallis magna eu, ultricies quam. In hac habitasse platea dictumst.",
            "p3" => "Fusce vel tempus nunc. Phasellus et risus eget sapien suscipit efficitur. Suspendisse iaculis purus ornare urna egestas imperdiet. Nulla congue consectetur placerat. Integer sit amet auctor justo. Pellentesque vel congue velit. Sed ullamcorper lacus scelerisque condimentum convallis. Sed ac mollis sem.",
            "img" => "blog-1.jpg",
            'user_id'=>'1'
        ]);
    }
}
