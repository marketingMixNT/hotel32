<?php

namespace App\Http\Controllers;

use App\Models\Home;
use App\Models\Room;
use App\Models\Gallery;
use App\Models\PageGallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {

        $home = Home::select('logo', 'phone', 'phone_second', 'address', 'city', 'booking_link', 'booking_script', 'map', 'map_link', 'title', 'mail')
            ->addSelect(['id'])
            ->with('socials')
            ->first();

        $rooms = Room::orderBy('sort')->select('title', 'slug',)->get();

        $pageGallery = PageGallery::first();

        $images = Gallery::orderBy('sort')->get();

        return view('pages.gallery.index', compact('images', 'home', 'pageGallery', 'rooms'));
    }
}
