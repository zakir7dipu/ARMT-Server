<?php

namespace App\Http\Controllers\Api\Guest;

use App\Http\Controllers\Controller;
use App\Models\AboutSection;
use App\Models\Event;
use App\Models\FeatureSection;
use App\Models\GeneralSettings;
use App\Models\Partner;
use App\Models\Project;
use App\Models\ShocialMediaLinks;
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

    public function eventsSection()
    {
        try {
            return response()->json(Event::all());
        }catch (\Throwable $th){
            return response()->json($th->getMessage());
        }
    }

    public function projectsView()
    {
        try {
            return response()->json(Project::select('id','image','title','sub_title')->get());
        }catch (\Throwable $th){
            return response()->json($th->getMessage());
        }
    }

    public function projectSingleView(Project $project)
    {
        try {
            return response()->json((object)[
                'project'=> (object)[
                    'id' => $project->id,
                    'title' => $project->title,
                    'description' => $project->description
                ],
                'baseInfo'=>GeneralSettings::first()
            ]);
        }catch (\Throwable $th){
            return response()->json($th->getMessage());
        }
    }

    public function getSocialLinks()
    {
        try {
            return response()->json(ShocialMediaLinks::first());
        }catch (\Throwable $th){
            return response()->json($th->getMessage());
        }
    }

    public function featureSectionView()
    {
        try {
            return response()->json(FeatureSection::first());
        }catch (\Throwable $th){
            return response()->json($th->getMessage());
        }
    }
}
