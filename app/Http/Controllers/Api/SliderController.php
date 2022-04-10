<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $data = (object)[
                'sliders' => Slider::all(),
                'status' => 200
            ] ;
            return response()->json($data);
        } catch (\Throwable $th) {
            $data = (object)[
                'message' => $th->getMessage(),
                'status' => 500,
            ] ;
            return response()->json($data);
        }
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
        $request->validate([
            'title' => ['required', 'string', 'max:35'],
        ]);

        try {
            $slider = new Slider();
            $slider->title = $request->title;
            if ($request->hasFile('image')){
                $image = $request->image;
                $x = 'abcdefghijklmnopqrstuvwxyz0123456789';
                $x = str_shuffle($x);
                $x = substr($x, 0, 6) . 'DAC.';
                $filename = time() . $x . $image->getClientOriginalExtension();
                Image::make($image->getRealPath())
                    ->resize(1920, 1000)
                    ->save(public_path('/upload/sliders/' . $filename));
                $path = "/upload/sliders/".$filename;
                $slider->image = $path;
            }
            $slider->save();
            $data = (object)[
                'slider' => $slider,
                'message' => 'Slider saved successfully',
                'status' => 201,
            ] ;
            return response()->json($data);
        }catch (\Throwable $th){
            $data = (object)[
                'message' => $th->getMessage(),
                'status' => 500,
            ] ;
            return response()->json($data);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slider $slider)
    {
        try {
            $file = $slider->image;
            if (file_exists(public_path($file))) {
                unlink(public_path($file));
            }
            $slider->delete();
            $data = (object)[
                'message' => 'Slider image has been deleted successfully',
                'status' => 200,
            ] ;
            return response()->json($data);
        }catch (\Throwable $th){
            $data = (object)[
                'message' => $th->getMessage(),
                'status' => 500,
            ] ;
            return response()->json($data);
        }


    }
}
