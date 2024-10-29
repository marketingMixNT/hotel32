<?php

namespace App\Http\Controllers;

use App\Models\Cta;
use App\Models\Home;
use App\Models\Room;
use App\Models\PageRooms;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function index()
    {
        $home = Home::select('logo', 'phone', 'phone_second', 'address', 'city', 'booking_link', 'booking_script', 'map', 'map_link', 'title', 'mail')
            ->addSelect(['id'])
            ->with('socials')
            ->firstOrFail();

        $rooms = Room::orderBy('sort')->select('title', 'slug', 'thumbnail', 'short_desc',  'beds', 'bathrooms')->get();

        $pageRooms = PageRooms::firstOrFail();

        return view('pages.room.index', compact('pageRooms', 'home', 'rooms'));
    }

    public function show($slug)
    {

        $home = Home::select('logo', 'phone', 'phone_second', 'address', 'city', 'booking_link', 'booking_script', 'map', 'map_link', 'title', 'mail')
            ->addSelect(['id'])
            ->with('socials')
            ->firstOrFail();

        $locale = app()->getLocale();


        $room = Room::where("slug->{$locale}", $slug)->firstOrFail();

        $rooms = Room::orderBy('sort')->select('title', 'slug',)->get();

        $cta = Cta::first();


        $otherRooms = Room::select('title', 'slug', 'thumbnail', 'beds', 'bathrooms')
            ->where('id', '!=', $room->id)
            ->orderBy('sort')
            ->take(3)
            ->get();

        return view('pages.room.show', compact('room', 'otherRooms' , 'rooms', 'home','cta'));
    }
}
