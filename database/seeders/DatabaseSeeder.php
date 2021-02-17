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
        \App\Models\User::factory(100)->create();
        \App\Models\Client::factory(100)->create();
        \App\Models\Product::factory(100)->create();
        \App\Models\Bill::factory(1000)->create();
        \App\Models\Detail::factory(10000)->create();
    }
}
