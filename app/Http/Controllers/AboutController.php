<?php

namespace App\Http\Controllers;

use App\Models\Home;
use App\Models\Room;
use App\Models\PageAbout;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $home = Home::select('logo', 'phone', 'phone_second', 'address', 'city', 'booking_link', 'booking_script', 'map', 'map_link', 'title', 'mail')
            ->addSelect(['id'])
            ->with('socials')
            ->first();

        $rooms = Room::orderBy('sort')->select('title', 'slug',)->get();

        $about = PageAbout::with("pageAboutBlocks")->first();

        return view('pages.about.index', compact('home', 'about','rooms'));
    }
}
