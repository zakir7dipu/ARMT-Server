<?php

namespace Database\Seeders;

use App\Models\Event;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $events = [
            [
                'image' => '/upload/events/The-Quest-to-Provide-Safe-Drinking-Water-for-All_320X165.jpg',
                'date' => '2020-04-01',
                'start_at' => '09:00:00',
                'end_at' => '10:00:00',
                'location' => 'Bangladesh',
                'title' => 'The Quest to Provide Safe Drinking Water for All - Water Project!',
                'description' => null,
            ],
            [
                'image' => '/upload/events/SSG-for-Humanity.jpg',
                'date' => '2020-04-01',
                'start_at' => '09:00:00',
                'end_at' => '10:00:00',
                'location' => 'Bangladesh',
                'title' => 'SSG for Humanity',
                'description' => null,
            ],
            [
                'image' => '/upload/events/A-Haven-of-Health-for-Those-in Need_320X165.jpg',
                'date' => '2020-04-01',
                'start_at' => '09:00:00',
                'end_at' => '10:00:00',
                'location' => 'Bangladesh',
                'title' => 'A Haven of Health for Those in Need',
                'description' => null,
            ]
        ];

//        Event::truncate();
        Event::insert($events);
    }
}
