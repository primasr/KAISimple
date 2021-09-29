<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class booking_list_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('booking_list')->insert([
            [
                'id_user' => '2',
                'id_hotel' => '1',
            ],
            [
                'id_user' => '2',
                'id_hotel' => '3',
            ],
            [
                'id_user' => '3',
                'id_hotel' => '5',
            ],
        ]);        
    }
}
