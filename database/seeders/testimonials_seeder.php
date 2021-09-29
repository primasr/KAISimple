<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class testimonials_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('testimonials')->insert([
            [
                'name' => 'Saul Goodman',
                'position' => 'CEO and Founder',
                'photo' => 'testimonials-1.jpg',
                'testimonial' => 'Great experience Very exclusive',
            ],
            [
                'name' => 'Sara Wilson',
                'position' => 'Designer',
                'photo' => 'testimonials-2.jpg',
                'testimonial' => 'Everything was wonderful, clean, good food, good service. This property has spectacular views.',
            ],
            [
                'name' => 'Jena Karlis',
                'position' => 'Store Owner',
                'photo' => 'testimonials-3.jpg',
                'testimonial' => 'Spectacular view from the room! If you like swimming pools you will have your choice of 4 plus outside hot tub. The rooftop pool is especially nice complete with bar. ',
            ],
            [
                'name' => 'Pakde Gozali',
                'position' => 'Tukang Tusuk Sate',
                'photo' => 'testimonials-4.jpg',
                'testimonial' => 'Nice hotel but when they serviced my room the service people stole a pair or jeans worth 300 dollars, when I claimed it they said sometimes they “throw stuff away depending on where they find it in the room”, but obviously the jeans wouldnt be in the trash can. On another note, the property is nice but you need a car to go everywhere because it is far up on a hill. Won’t stay there again. ',
            ],
            [
                'name' => 'Pak Embuh',
                'position' => 'Pengangguran',
                'photo' => 'testimonials-5.jpg',
                'testimonial' => 'The resort is beautiful! The staff is very pleasant and friendly, specially the woman from Chile (we didn’t catch her name). She went above and beyond to ensure that we explored everything the resort had to offer and how to stay warm and safe from the extremely cold weather. It was such an amazing experience!',
            ],
        ]);
    }
}
