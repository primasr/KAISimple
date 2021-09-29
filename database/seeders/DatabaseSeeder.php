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
        $this->call([
            hotel_seeder::class,
            testimonials_seeder::class,
            user_seeder::class,
            booking_list_seeder::class,
        ]);
    }
}
