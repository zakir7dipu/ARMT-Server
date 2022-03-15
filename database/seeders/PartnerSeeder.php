<?php

namespace Database\Seeders;

use App\Models\Partner;
use Illuminate\Database\Seeder;

class PartnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $partners = [
            [
                "po_index" => 1,
                "image" => "upload/partners/Picture1.png"
            ],
            [
                "po_index" => 2,
                "image" => "upload/partners/Picture2.png"
            ],
            [
                "po_index" => 3,
                "image" => "upload/partners/Picture3.png"
            ],
            [
                "po_index" => 4,
                "image" => "upload/partners/Picture4.png"
            ],
            [
                "po_index" => 5,
                "image" => "upload/partners/Picture5.png"
            ],
            [
                "po_index" => 6,
                "image" => "upload/partners/Picture6.png"
            ],
            [
                "po_index" => 7,
                "image" => "upload/partners/Picture7.png"
            ],
            [
                "po_index" => 8,
                "image" => "upload/partners/Picture8.png"
            ],
            [
                "po_index" => 9,
                "image" => "upload/partners/Picture9.png"
            ],
            [
                "po_index" => 10,
                "image" => "upload/partners/Picture10.png"
            ],
        ];
        Partner::insert($partners);
    }
}
