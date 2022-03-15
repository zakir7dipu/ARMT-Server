<?php

namespace Database\Seeders;

use App\Models\Slider;
use Illuminate\Database\Seeder;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sliders = [
            [
                'thumb' => 'GO FOR HELP',
                'title' => 'They Are Wait For Some Food.',
                'sub_title' => 'It is a long established fact that a reader will be distracted the readable content of a page when looking at its layout point of using of letters, as opposed.',
                'btn_text' => null,
                'btn_url' => null,
                'image' => '/upload/sliders/slider1.jpg'
            ],
            [
                'thumb' => 'GO FOR HELP',
                'title' => 'They Are Wait For Some Food.',
                'sub_title' => 'It is a long established fact that a reader will be distracted the readable content of a page when looking at its layout point of using of letters, as opposed.',
                'btn_text' => null,
                'btn_url' => null,
                'image' => '/upload/sliders/slider2.jpg'
            ],
            [
                'thumb' => 'GO FOR HELP',
                'title' => 'They Are Wait For Some Food.',
                'sub_title' => 'It is a long established fact that a reader will be distracted the readable content of a page when looking at its layout point of using of letters, as opposed.',
                'btn_text' => null,
                'btn_url' => null,
                'image' => '/upload/sliders/slider3.jpg'
            ],
            [
                'thumb' => 'GO FOR HELP',
                'title' => 'They Are Wait For Some Food.',
                'sub_title' => 'It is a long established fact that a reader will be distracted the readable content of a page when looking at its layout point of using of letters, as opposed.',
                'btn_text' => null,
                'btn_url' => null,
                'image' => '/upload/sliders/slider4.jpg'
            ]
        ];

        Slider::insert($sliders);
    }
}
