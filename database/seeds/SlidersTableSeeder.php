<?php

use Illuminate\Database\Seeder;
use App\Models\Slider;

class SlidersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $slider = [
            'message' => 'Welcome',
            'title' => 'Sonjoy Barua.,A Web Designer.,A Developer.',
            'sub_title' => 'I\'m Sonjoy Barua. A Mid Level Web Designer And Web Developer With 2 Year\'s Experience.',
            'url' => 'https://drive.google.com/open?id=1uWhPWfh0kDyLCDaw86ZlLQlKCuGjTY0x',

        ];

        Slider::create($slider);
    }
}
