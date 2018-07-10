<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Photobook;
use App\Pic;


class PagesController extends Controller
{
    public function index() {
        return view('pages.index');
    }

    public function cato() {
        $photobook = Photobook::whereTitle('Cato')->first();
        $pics = Pic::wherePhotobookId($photobook->id)->limit(4)->orderBy('created_at', 'desc')->get();
        return view('pages.cato', compact('photobook', 'pics'));
    }

    public function kanawha() {
        $photobook = Photobook::whereTitle('Kanawha City')->first();
        $pics = Pic::wherePhotobookId($photobook->id)->limit(4)->orderBy('created_at', 'desc')->get();
        //$pics = DB::table('pics')->where('photobook_id', '=', $photobook->id)->take(4)->latest();
        return view('pages.kanawha-city', compact('photobook', 'pics'));
    }

    public function mlk() {
        $photobook = Photobook::whereTitle('Martin Luther King Jr.')->first();
        $pics = Pic::wherePhotobookId($photobook->id)->limit(4)->orderBy('created_at', 'desc')->get();
        return view('pages.mkl-jr', compact('photobook', 'pics'));
    }

    public function northCharleston() {
        $photobook = Photobook::whereTitle('North Charleston')->first();
        $pics = Pic::wherePhotobookId($photobook->id)->limit(4)->orderBy('created_at', 'desc')->get();
        return view('pages.north-charleston', compact('photobook', 'pics'));
    }

    public function roosevelt() {
        $photobook = Photobook::whereTitle('Roosevelt')->first();
        $pics = Pic::wherePhotobookId($photobook->id)->limit(4)->orderBy('created_at', 'desc')->get();
        return view('pages.roosevelt', compact('photobook', 'pics'));
    }

    public function contact() {
        return view('pages.contact');
    }

    public function weekly() {
        return view('pages.weekly-fun');
    }

    public function soon() {
        return view('pages.coming-soon');
    }
}
