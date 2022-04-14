<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\AboutSection;
use App\Models\Event;
use App\Models\FeatureSection;
use App\Models\GeneralSettings;
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
        $section->video_id = $request->video_id;
        $section->title = $request->title;
        $section->description = $request->description;
        if ($request->hasFile('image')){
            $file = $section->image;
            if (file_exists(public_path($file))) {
                unlink(public_path($file));
            }

            $image = $request->image;
            $x = 'abcdefghijklmnopqrstuvwxyz0123456789';
            $x = str_shuffle($x);
            $x = substr($x, 0, 6) . 'DAC.';
            $filename = time() . $x . $image->getClientOriginalExtension();
            Image::make($image->getRealPath())
                ->resize(464, 464)
                ->save(public_path('/upload/settings/' . $filename));
            $path = "/upload/settings/".$filename;
            $section->image = $path;
        }
        if ($request->hasFile('thumb_image')){
            $file = $section->thumb_image;
            if (file_exists(public_path($file))) {
                unlink(public_path($file));
            }

            $image = $request->thumb_image;
            $x = 'abcdefghijklmnopqrstuvwxyz0123456789';
            $x = str_shuffle($x);
            $x = substr($x, 0, 6) . 'DAC.';
            $filename = time() . $x . $image->getClientOriginalExtension();
            Image::make($image->getRealPath())
                ->resize(523, 570)
                ->save(public_path('/upload/settings/' . $filename));
            $path = "/upload/settings/".$filename;
            $section->thumb_image = $path;
        }
        $section->save();
        return response()->json((object)[
            "message"=>'Saved Successfully',
        ],201);
    }

    public function featureSection()
    {
        $section = FeatureSection::first();
        return response()->json($section);
    }

    public function featureSectionStore(Request $request)
    {
        if (FeatureSection::first()){
            $section = FeatureSection::first();
        }else {
            $section = new FeatureSection();
        }
        $section->thumb = $request->thumb;
        $section->description = $request->description;
        $section->button_text = $request->button_text;
        $section->button_url = $request->button_url;
        $section->save();
        return response()->json((object)[
            "message"=>'Saved Successfully',
        ],201);
    }

    public function contactData()
    {
        $contact = GeneralSettings::first();
        return response()->json($contact);
    }

    public function contactDataStore(Request $request)
    {
        $contact = GeneralSettings::first();
        $contact->address = $request->address;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->save();
        return response()->json((object)[
            "message"=>'Saved Successfully',
        ],201);
    }

    public function eventIndex()
    {
        $events = Event::all();
        return response()->json($events);
    }
}
