<?php

namespace App\Http\Controllers\Api\Guest;

use App\Http\Controllers\Controller;
use App\Models\AboutSection;
use App\Models\GeneralSettings;
use App\Models\Partner;
use App\Models\Slider;
use Illuminate\Http\Request;

class GuestViewController extends Controller
{
    public function baseInfoSection()
    {
        try {
            return response()->json(GeneralSettings::first());
        }catch (\Throwable $th){
            return response()->json($th->getMessage());
        }
    }

    public function partnerView()
    {
        try {
            return response()->json(Partner::orderBy('po_index')->get());
        }catch (\Throwable $th){
            return response()->json($th->getMessage());
        }
    }

    public function sliderView()
    {
        try {
            return response()->json(Slider::all());
        }catch (\Throwable $th){
            return response()->json($th->getMessage());
        }
    }

    public function aboutSection()
    {
        try {
            return response()->json(AboutSection::first());
        }catch (\Throwable $th){
            return response()->json($th->getMessage());
        }
    }
}
