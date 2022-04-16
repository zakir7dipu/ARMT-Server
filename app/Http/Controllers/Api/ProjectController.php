<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::all();
        return response()->json($projects);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $project = new Project();
        $project->title = $request->title;
        $project->sub_title = $request->sub_title;
        $project->description = $request->description;
        if ($request->hasFile('image')){
            $image = $request->image;
            $x = 'abcdefghijklmnopqrstuvwxyz0123456789';
            $x = str_shuffle($x);
            $x = substr($x, 0, 6) . 'DAC.';
            $filename = time() . $x . $image->getClientOriginalExtension();
            Image::make($image->getRealPath())
                ->resize(357, 200)
                ->save(public_path('/upload/projects/' . $filename));
            $path = "/upload/projects/".$filename;
            $project->image = $path;
        }
        $project->save();
        return response()->json((object)[
            "message"=>'Saved Successfully',
        ],201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        return response()->json($project);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        $project->title = $request->title;
        $project->sub_title = $request->sub_title;
        $project->description = $request->description;
        if ($request->hasFile('image')){
            $image = $request->image;
            $x = 'abcdefghijklmnopqrstuvwxyz0123456789';
            $x = str_shuffle($x);
            $x = substr($x, 0, 6) . 'DAC.';
            $filename = time() . $x . $image->getClientOriginalExtension();
            Image::make($image->getRealPath())
                ->resize(357, 200)
                ->save(public_path('/upload/projects/' . $filename));
            $path = "/upload/projects/".$filename;
            $project->image = $path;
        }
        $project->save();
        return response()->json((object)[
            "message"=>'Updated Successfully',
        ],201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        if($project->image){
            $file = $project->image;
            if (file_exists(public_path($file))) {
                unlink(public_path($file));
            }
        }
        $project->delete();
        return response()->json((object)[
            "data" => $project,
            "message"=>'Deleted Successfully',
        ],201);
    }
}
