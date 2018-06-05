<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use Auth;
use Image;
use Carbon\Carbon;

class BlogsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::all();
        return view('blogs.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $b = new Blog;
        $b->user_id = Auth::id();
        $b->title = $request->title;
        $slug = str_slug($request->title);
        $b->slug = $slug;
        $b->body = $request->body;
        $b->video = $request->video;

        $image = $request->image;
        $time = time();
        $filename = 'blog-' . $time . '.' . $image->getClientOriginalExtension();
        $filenameSm = 'sm-' . $filename;
        $filenameLg = 'lg-' . $filename;

        Image::make($image)->resize(800, 800, function($constraint) {
            $constraint->aspectRatio();
        })->save( public_path('/images/blogs/lg/' . $filenameLg));

        Image::make($image)->resize(500, 500, function($constraint) {
            $constraint->aspectRatio();
        })->save( public_path('/images/blogs/sm/' . $filenameSm));
        $b->image = $filename;
        $b->save();

        return redirect('/blogs');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $b = Blog::whereSlug($slug)->first();
        return view('blogs.show', compact('b'));
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
    public function destroy($id)
    {
        //
    }
}
