<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("users")->insert([
            "nom" => "Le Goat",
            "email" => "walter@mail.com",
            "password" => Hash::make("aaaaaaaa"),
            "img" => "4.png",
            'role_id'=>'1'
        ]);

        DB::table("users")->insert([
            "nom" => "Sarah Jhonson",
            "email" => "sarah@mail.com",
            "password" => Hash::make("aaaaaaaa"),
            "img" => "2.jpg",
            'role_id'=>'2'
        ]);
        
        DB::table("users")->insert([
            "nom" => "Amanda Jepson",
            "email" => "amanda@mail.com",
            "password" => Hash::make("aaaaaaaa"),
            "img" => "1.jpg",
            'role_id'=>'3'
        ]);

        DB::table("users")->insert([
            "nom" => "William Anderson",
            "email" => "william@mail.com",
            "password" => Hash::make("aaaaaaaa"),
            "img" => "3.jpg",
            'role_id'=>'4'
        ]);

        DB::table("users")->insert([
            "nom" => "Cem",
            "email" => "cem@mail.com",
            "password" => Hash::make("aaaaaaaa"),
            "img" => "5.jpg",
            'role_id'=>'5'
        ]);
    }
}
