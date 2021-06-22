<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdresseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("adresses")->insert([
            "rue" => "C/ Libertad",
            "num" => "34",
            "ville" => "Arévalo",
            "code" => "05200",
            "phone" => "0034 37483 2445 322",
            "email" => "hello@company.com",
        ]);
    }
}
