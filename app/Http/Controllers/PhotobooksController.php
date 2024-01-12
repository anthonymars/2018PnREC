<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photobook;
use App\Pic;
use Alert;

class PhotobooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $photobooks = Photobook::orderBy('title', 'desc')->get();
        return view('galleries.index', compact('photobooks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('galleries.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $g = new Photobook;
        $g->title = $request->title;
        $slug = str_slug($request->title);
        $g->description = $request->description;
        $g->slug = $slug;
        $g->save();
        Alert::success('You Created a Super Gallery!');
        return redirect('/galleries');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $p = Photobook::whereSlug($slug)->first();
        return view('galleries.show', compact('p'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $g = Photobook::whereSlug($slug)->first();
        return view('galleries.edit', compact('g'));
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
        $g = Photobook::whereSlug($slug)->first();
        $g->title = $request->title;
        $slug = str_slug($request->title);
        $g->description = $request->description;
        $g->slug = $slug;
        $g->save();
        Alert::success('You Edited ' . $request->title . '!!!');
        return redirect('/galleries');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $g = Photobook::whereSlug($slug)->first();
        $pics = Pic::wherePhotobookId($g->id)->get();
        foreach($pics as $p) {
            $p->delete();
        }
        $g->delete();
        alert::warning('It is no longer with us...');
        return redirect('/galleries');
    }
}
