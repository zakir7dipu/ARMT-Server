<?php

namespace Database\Seeders;

use App\Models\ShocialMediaLinks;
use Illuminate\Database\Seeder;

class ShocialMediaLinksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $socialMedia = [
            'facebook' => 'https://www.facebook.com/ssgbd/about/?ref=page_internal',
            'whatsapp' => null,
            'linkedin' => 'https://www.linkedin.com/company/super-star-group/',
            'tweeter' => 'https://twitter.com/ssg_bd/',
            'pinterest' => 'https://www.pinterest.com/ssg_bd/'
        ];
        ShocialMediaLinks::truncate();
        ShocialMediaLinks::create($socialMedia);
    }
}
