<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

use App\Event;
use App\Date;
use Image;
use Auth;
use Carbon\Carbon;
use App\Http\Requests\EventRequest;
use Alert;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dt = Carbon::now();
        $date = date('m/d/Y', strtotime($dt));
        $dates = Date::where('date', '>=', $date)->orderBy('date', 'asc')->paginate(10);
        return view('events.index', compact('dates'));
    }

    public function location(Request $request) {
        $dt = Carbon::now();
        $date = date('m/d/Y', strtotime($dt));
        $dates = Date::where([
            ['date', '>=', $date],
            ['event_location', '=', $request->location]
        ])->orderBy('date', 'asc')->paginate(10);
        return view('events.index', compact('dates'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('events.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EventRequest $request)
    {
        $event = new Event;
        $dateSlug = str_slug(date('M-d-Y', strtotime(Carbon::now())));
        $locationSlug = str_slug($request->event_location);
        $nameSlug = str_slug($request->event_name);
        $preSlug = $nameSlug . '-' . $locationSlug . '-' . $dateSlug;
        $slug = $preSlug;
        $event->user_id = Auth::id();
        $event->event_location = $request->event_location;
        $event->event_name = $request->event_name;
        $event->slug = $slug;

        $event->event_description = $request->event_description;
        $event->contact = $request->contact;
        $event->email = $request->email;

        if ($request->hasFile('image')){
        $image = $request->file('image');
        $time = time();
        $filename = 'event-' . $time . '.' . $image->getClientOriginalExtension();
        Image::make($image)->orientate()->resize(400, 400, function($constraint) {
            $constraint->aspectRatio();
        })->save( public_path('/images/events/2018/sm/' . $filename));

        Image::make($image)->orientate()->resize(600, 600, function($constraint) {
            $constraint->aspectRatio();
            $constraint->upsize();
        })->save( public_path('/images/events/2018/lg/' . $filename ));

        $event->image = $filename;
        }

        if ($request->hasFile('support_doc')) {
            $time = time();
            $file = request()->file('support_doc');
            $ext = $file->guessClientExtension();
            $fileName = $time . "." . $ext;
            $path = $file->store('support', 'public2');
            $event->support_doc = $path;
        }

        $event->save();

        $array = explode(',', $request->event_dates);
        for($i = 0; $i < count($array); $i++) {
            $date = new Date;
            $date->event_id = $event->id;
            $date->date = $array[$i];
            $date->event_location = $event->event_location;
            $date->save();
        }
        Alert::success('OMG!!! You Created A New Event!!!');
        return redirect('/events/' . $slug);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $e = Event::whereSlug($slug)->first();
        $dates = Date::whereEventId($e->id)->orderBy('date', 'asc')->get();
        return view('events.show', compact('e', 'dates'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $e = Event::whereSlug($slug)->first();
        $d = Date::whereEventId($e->id)->get();
        $dates = '';
        foreach ($d as $date) {
            $dates .= $date->date . ',';
        }
        return view('events.edit', compact('e', 'dates'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        $event = Event::whereSlug($slug)->first();
        $dateSlug = str_slug(Carbon::now());
        $locationSlug = str_slug($request->event_location);
        $nameSlug = str_slug($request->event_name);
        $preSlug = $nameSlug . '-' . $locationSlug . '-' . $dateSlug;
        $slug = $preSlug;
        $event->user_id = Auth::id();
        $event->event_location = $request->event_location;
        $event->event_name = $request->event_name;
        $event->slug = $slug;

        $event->event_description = $request->event_description;
        $event->contact = $request->contact;
        $event->email = $request->email;

        if ($request->hasFile('image')){
            $image = $request->file('image');
            $time = time();
            $filename = 'event-' . $time . '.' . $image->getClientOriginalExtension();
            Image::make($image)->orientate()->resize(400, 400, function($constraint) {
                $constraint->aspectRatio();
            })->save( public_path('/images/events/2018/sm/' . $filename));

            Image::make($image)->orientate()->resize(600, 600, function($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            })->save( public_path('/images/events/2018/lg/' . $filename ));

            $event->image = $filename;
        } else {
            $image = $event->image;
            $event->image = $image;
        }

        if ($request->hasFile('support_doc')) {
            $time = time();
            $file = request()->file('support_doc');
            $ext = $file->guessClientExtension();
            $fileName = $time . "." . $ext;
            $path = $file->store('support', 'public2');
            $event->support_doc = $path;
        } else {
            $doc = $event->support_doc;
            $event->support_doc = $doc;
        }

        $event->save();

        $dates = Date::whereEventId($event->id)->get();
        foreach ($dates as $d) {
            $d->delete();
        }

        $array = explode(',', $request->event_dates);
        for($i = 0; $i < count($array); $i++) {
            $date = new Date;
            $date->event_id = $event->id;
            $date->date = $array[$i];
            $date->event_location = $event->event_location;
            $date->save();
        }
        Alert::success('OMG!!! You Edited The Event!!!');
        return redirect('/events/' . $slug);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $e = Event::whereSlug($slug)->first();
        $dates = Date::whereEventId($e->id)->get();
        foreach($dates as $d) {
            $d->delete();
        }
        $e->delete();
        Alert::warning('Oh No You Didn\'t!!! You Blew It UP!!!');
        return redirect('/events');
    }
}
