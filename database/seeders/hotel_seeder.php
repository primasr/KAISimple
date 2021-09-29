<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class hotel_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('hotels')->insert([
            [
                'name' => 'Argo Bromo Anggrek',
                'price' => 169000,
                'images' => 'Argo Bromo Anggrek.jpg',
                'stasiun_awal' => 'Surabaya Pasarturi',
                'stasiun_akhir' => 'Gambir',
                'category' => 'Executive', //Executive, Business, Economy
                'updated_at' => Carbon::today()->subDays(rand(0, 365)),
            ],
            [
                'name' => 'Wijayakusuma',
                'price' => 150000,
                'images' => 'Wijayakusuma.jpg',
                'stasiun_awal' => 'Cilacap',
                'stasiun_akhir' => 'Ketapang',
                'category' => 'Executive', //Executive, Business, Economy
                'updated_at' => Carbon::today()->subDays(rand(0, 365)),
            ],
            [
                'name' => 'Ranggajati',
                'price' => 111000,
                'images' => 'Ranggajati.jpg',
                'stasiun_awal' => 'Cirebon',
                'stasiun_akhir' => 'Jember',
                'category' => 'Business', //Executive, Business, Economy
                'updated_at' => Carbon::today()->subDays(rand(0, 365)),
            ],
            [
                'name' => 'Logawa',
                'price' => 130000,
                'images' => 'Logawa.jpg',
                'stasiun_awal' => 'Purwokerto',
                'stasiun_akhir' => 'Jember',
                'category' => 'Business', //Executive, Business, Economy
                'updated_at' => Carbon::today()->subDays(rand(0, 365)),
            ],
            [
                'name' => 'Sri Tanjung',
                'price' => 86000,
                'images' => 'Sri Tanjung.jpg',
                'stasiun_awal' => 'Lempuyangan',
                'stasiun_akhir' => 'Ketapang',
                'category' => 'Economy', //Executive, Business, Economy
                'updated_at' => Carbon::today()->subDays(rand(0, 365)),
            ],
            [
                'name' => 'Siliwangi',
                'price' => 60000,
                'images' => 'Siliwangi.png',
                'stasiun_awal' => 'Sukabumi',
                'stasiun_akhir' => 'Cipatat',
                'category' => 'Economy', //Executive, Business, Economy
                'updated_at' => Carbon::today()->subDays(rand(0, 365)),
            ],
            [
                'name' => 'Tawang Alun',
                'price' => 69000,
                'images' => 'Tawang Alun.jpg',
                'stasiun_awal' => 'Ketapang',
                'stasiun_akhir' => 'Malang Kota Lama',
                'category' => 'Economy', //Executive, Business, Economy
                'updated_at' => Carbon::today()->subDays(rand(0, 365)),
            ],
        ]);
    }
}
