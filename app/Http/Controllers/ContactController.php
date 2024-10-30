<?php

namespace App\Http\Controllers;

use App\Models\Home;
use App\Models\Room;
use App\Models\PageContact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $home = Home::select('logo', 'phone', 'phone_second', 'address', 'city', 'booking_link', 'booking_script', 'map', 'map_link', 'title', 'mail')
            ->addSelect(['id'])
            ->with('socials')
            ->first();

        $rooms = Room::orderBy('sort')->select('title', 'slug',)->get();

        $pageContact = PageContact::first();

        return view('pages.contact.index', compact('home', 'pageContact','rooms'));
    }
}
