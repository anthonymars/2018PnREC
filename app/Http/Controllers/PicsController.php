<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Pic;
use Image;

class PicsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $p = new Pic;
        $p->user_id = Auth::id();
        $p->photobook_id = $request->photobook_id;
        $p->title = $request->title;

        $image = $request->image;
        $time = time();
        $filename = 'pic-' . $time . '.' . $image->getClientOriginalExtension();
        $filenameSm = 'sm-' . $filename;
        $filenameLg = 'lg-' . $filename;

        Image::make($image)->resize(800, 800, function($constraint) {
            $constraint->aspectRatio();
        })->save( public_path('/images/pics/lg/' . $filenameLg));

        Image::make($image)->resize(500, 500, function($constraint) {
            $constraint->aspectRatio();
        })->save( public_path('/images/pics/sm/' . $filenameSm));

        $p->image = $filename;
        $p->save();
        return back();

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
    public function destroy($id)
    {
        $p = Pic::whereId($id)->first();
        $p->delete();

        return back();
    }
}
