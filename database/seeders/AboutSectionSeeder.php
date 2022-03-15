<?php

namespace Database\Seeders;

use App\Models\AboutSection;
use Illuminate\Database\Seeder;

class AboutSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $section = [
            'thumb' => 'ABOUT US',
            'image' => '/upload/settings/about-section.png',
            'thumb_image' => '/upload/settings/thumb-image1.png',
            'video_id' => 'IkUevK4jS3U',
            'title' => 'SSG for Humanity ',
            'sub_title' => null,
            'description' => '<p>During the pandemic, people from every class suffered a lot. Especially the poor underprivileged people suffered from the food crisis. In this dire situation, Super Star Group the patron of ARMT decided to come forward and share the same food that they provide for their regular employees. This initiative still continues and every month from SSG a great amount of food is distributed to the poor underprivileged people of the society.
</p><p>Super Star Group the patron of ARMT always works for the wellbeing of underprivileged people of the society. And in the future, it has a plan to make this happen on a very large scale.
</p>'
        ];

        AboutSection::create($section);
    }
}
