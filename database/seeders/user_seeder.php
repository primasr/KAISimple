<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Carbon;

class user_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Admin Terkenal',
                'email' => 'admin@gmail.com',
                'phone' => '62852326969',
                'photo' => 'admin.jpg',
                'password' => Hash::make('password_admin'),
                'role_id' => '0',
                'updated_at' => Carbon::today()->subDays(rand(0, 365)),
            ],
            [
                'name' => 'User Pengangguran',
                'email' => 'user@gmail.com',
                'phone' => '6285696969',
                'photo' => 'user.jpg',
                'password' => Hash::make('password_user'),
                'role_id' => '1',
                'updated_at' => Carbon::today()->subDays(rand(0, 365)),
            ],
            [
                'name' => 'User versi 2',
                'email' => 'user2@gmail.com',
                'phone' => '6123515139',
                'photo' => 'user.jpg',
                'password' => Hash::make('password_user'),
                'role_id' => '1',
                'updated_at' => Carbon::today()->subDays(rand(0, 365)),
            ],            
        ]);
    }
}
