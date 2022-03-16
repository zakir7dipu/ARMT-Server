<?php

namespace Database\Seeders;

use App\Models\GeneralSettings;
use Illuminate\Database\Seeder;

class GeneralSettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $generalInfo = [
            'logo' => '/upload/settings/Logo_240x50.png',
            'about' => 'SSG FOR Humanity.',
            'address' => 'UCEP Cheyne Tower (3rd Floor), 25 Segunbagicha 1000 Ramna, Dhaka Division, Bangladesh',
            'phone' => '8809610-774774',
            'email' => 'info@ssgbd.com',
            'banner_image' => '/settings/upload/MASTER-TEMPLET_1920X350.png'
        ];
        GeneralSettings::truncate();
        GeneralSettings::create($generalInfo);
    }
}
