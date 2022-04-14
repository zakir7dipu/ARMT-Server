<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;
use Intervention\Image\Facades\Image;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::all();
        return response()->json($events);
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
        $event = new Event();
        if($request->hasFile('image')){
            $image = $request->image;
            $x = 'abcdefghijklmnopqrstuvwxyz0123456789';
            $x = str_shuffle($x);
            $x = substr($x, 0, 6) . 'DAC.';
            $filename = time() . $x . $image->getClientOriginalExtension();
            Image::make($image->getRealPath())
                        ->resize(357, 200)
                        ->save(public_path('/upload/events/' . $filename));
            $path = "/upload/events/".$filename;
            $event->image = $path;
        }
        $event->date = $request->date;
        $event->start_at = date('h:i:s', time());
        $event->end_at = date('h:i:s', time());
        $event->location = $request->location;
        $event->title = $request->title;
        $event->save();
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
    public function show(Event $event)
    {
        return response()->json($event);
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
    public function update(Request $request, Event $event)
    {
        if($request->hasFile('image')){
            if($event->image){
                $file = $event->image;
                if (file_exists(public_path($file))) {
                    unlink(public_path($file));
                }
            }
            $image = $request->image;
            $x = 'abcdefghijklmnopqrstuvwxyz0123456789';
            $x = str_shuffle($x);
            $x = substr($x, 0, 6) . 'DAC.';
            $filename = time() . $x . $image->getClientOriginalExtension();
            Image::make($image->getRealPath())
                                ->resize(357, 200)
                                ->save(public_path('/upload/events/' . $filename));
            $path = "/upload/events/".$filename;
            $event->image = $path;
        }
        $event->date = $request->date;
        $event->start_at = date('h:i:s', time());
        $event->end_at = date('h:i:s', time());
        $event->location = $request->location;
        $event->title = $request->title;
        $event->save();
        return response()->json((object)[
                    "message"=>'Saved Successfully',
                ],201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        if($event->image){
            $file = $event->image;
            if (file_exists(public_path($file))) {
                unlink(public_path($file));
            }
        }
        $event->delete();
        return response()->json((object)[
                            "message"=>'Deleted Successfully',
                        ],201);
    }
}
