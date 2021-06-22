<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(FooterSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(LinkSeeder::class);
        $this->call(TitreSeeder::class);
        $this->call(VideoSeeder::class);
        $this->call(ImageSeeder::class);
        $this->call(AdresseSeeder::class);
        $this->call(SliderSeeder::class);
    }
}
