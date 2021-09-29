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
                'name' => 'Kemangi Apartments and Yoga Space',
                'price' => 637754,
                'rating' => 25, // nanti bagi 10
                'images' => '1_1.jpg,1_2.jpg,1_3.jpg',
                'address' => 'Jl. Katik Lantang, Ubud, 80571, Bali, Indonesia',
                'coordinate' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3945.80609253061!2d115.24782921462955!3d-8.518199088626954!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd23dfefb1eb7e7%3A0x69ce38b0c8ab6060!2sKemangi%20Apartments%20and%20Yoga%20Space!5e0!3m2!1sen!2sid!4v1629916355067!5m2!1sen!2sid',
                'facilities' => 'Free WiFi,Free parking,Pool,Airport transfer,Kitchen,Non-smoking',
                'rooms' => 23,
                'category' => 'Apartment',
                'updated_at' => Carbon::today()->subDays(rand(0, 365)),
            ],
            [
                'name' => 'Kasira Residence Serviced Apartment',
                'price' => 448774,
                'rating' => 30,
                'images' => '2_1.jpg,2_2.jpg',
                'address' => 'JL Unta Raya No 19 Rt 003 Rw 006, South Tangerang, 15412, Tangerang selatan, Indonesia',
                'coordinate' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15863.61018747047!2d106.72273492393953!3d-6.276542327313249!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f073d9b39e85%3A0xcf730deb15d6299f!2sKasira%20Residence!5e0!3m2!1sen!2sid!4v1629916697025!5m2!1sen!2sid',
                'facilities' => 'Free WiFi,Free parking,Bathtub,Air Conditioning',
                'rooms' => 10,
                'category' => 'Apartment',
                'updated_at' => Carbon::today()->subDays(rand(0, 365)),
            ],
            [
                'name' => 'Resort Penthouse, Beachclub',
                'price' => 696969,
                'rating' => 44,
                'images' => '3.jpg',
                'address' => 'Nusa Dua, Bali, Indonesia',
                'coordinate' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14122.127037908887!2d-82.7756644710113!3d27.7625849243032!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88c2fd1278e5bc39%3A0x32a9c9b458cf390e!2sPenthouse%20Beach%20Club!5e0!3m2!1sen!2sid!4v1629916731179!5m2!1sen!2sid',
                'facilities' => 'Parking available,Pool,Bathtub,Kitchen,Gym,Air Conditioning',
                'rooms' => 4,
                'category' => 'Resort',
                'updated_at' => Carbon::today()->subDays(rand(0, 365)),
            ],
            [
                'name' => 'Swiss-Belinn Bogor',
                'price' => 446281,
                'rating' => 40,
                'images' => '4.jpg',
                'address' => 'Jalan Pajajaran Indah V, Bogor, 16143, Jawa Barat, Indonesia',
                'coordinate' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15853.152111332049!2d106.80583576977536!3d-6.611089499999991!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c51aad941429%3A0xf0140abb97c5413a!2sSwiss-Belinn%20Bogor!5e0!3m2!1sen!2sid!4v1629916993536!5m2!1sen!2sid',
                'facilities' => 'Pool,Free WiFi,Free parking,Smoking areas,Restaurant',
                'rooms' => 0,
                'category' => 'Hotel',
                'updated_at' => Carbon::today()->subDays(rand(0, 365)),
            ],
            [
                'name' => 'TreeHouse Villas',
                'price' => 3418194,
                'rating' => 50,
                'images' => '5_1.jpg,5_2.jpg',
                'address' => '24 Moo 4, T.Koh Yao Noi, A.Koh Yao, Ko Yao, 82160, Phang Nga, Thailand',
                'coordinate' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15797.05137978797!2d98.62560642413254!3d8.176254105842027!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3051b05e8f0ad15d%3A0xad7c6242b8e7ec41!2zVHJlZUhvdXNlIFZpbGxhcyBLb2ggWWFvIE5vaSBMdXh1cnkgQmVhY2ggUmVzb3J0IOC4l-C4o-C4teC5gOC4ruC5ieC4suC4quC5jCDguYDguIHguLLguLDguKLguLLguKfguJnguYnguK3guKIg4Lij4Li14Liq4Lit4Lij4LmM4LiXIOC4nuC4seC4h-C4h-C4sg!5e0!3m2!1sen!2sid!4v1629917249373!5m2!1sen!2sid',
                'facilities' => 'Free WiFi,Pool,Airport transfer,Bathtub,Non-smoking,Air Conditioning',
                'rooms' => 69,
                'category' => 'Villa',
                'updated_at' => Carbon::today()->subDays(rand(0, 365)),
            ],
        ]);
    }
}
