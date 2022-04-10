<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\AboutSection;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class HomePageController extends Controller
{
    public function aboutSection(Request $request)
    {
        $section = AboutSection::first();
        return response()->json($section);
    }

    public function aboutSectionStore(Request $request)
    {
        $section = AboutSection::first();
        if ($request->hasFile('image')){
//            $image = $request->image;
//            $x = 'abcdefghijklmnopqrstuvwxyz0123456789';
//            $x = str_shuffle($x);
//            $x = substr($x, 0, 6) . 'DAC.';
//            $filename = time() . $x . $image->getClientOriginalExtension();
//            Image::make($image->getRealPath())
//                ->resize(1920, 1000)
//                ->save(public_path('/upload/sliders/' . $filename));
//            $path = "/upload/sliders/".$filename;
        }
        return response()->json();
    }
}
