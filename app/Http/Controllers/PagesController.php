<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photobook;


class PagesController extends Controller
{
    public function index() {
        return view('pages.index');
    }

    public function cato() {
        $photobook = Photobook::whereTitle('Cato')->first();
        return view('pages.cato', compact('photobook'));
    }

    public function kanawha() {
        $photobook = Photobook::whereTitle('Kanawha City')->first();
        return view('pages.kanawha-city', compact('photobook'));
    }

    public function mlk() {
        $photobook = Photobook::whereTitle('Martin Luther King Jr.')->first();
        return view('pages.mkl-jr', compact('photobook'));
    }

    public function northCharleston() {
        $photobook = Photobook::whereTitle('North Charleston')->first();
        return view('pages.north-charleston', compact('photobook'));
    }

    public function roosevelt() {
        $photobook = Photobook::whereTitle('Roosevelt')->first();
        return view('pages.roosevelt', compact('photobook'));
    }
}
