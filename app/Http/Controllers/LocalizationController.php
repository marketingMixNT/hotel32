<?php

namespace App\Http\Controllers;

use App\Models\Home;
use App\Models\PageLocalization;
use App\Models\Room;
use Illuminate\Http\Request;

class LocalizationController extends Controller
{
    public function index()
    {
        $home = Home::select('logo', 'phone', 'phone_second', 'address', 'city', 'booking_link', 'booking_script', 'map', 'map_link', 'title', 'mail')
            ->addSelect(['id'])
            ->with('socials')
            ->first();

        $rooms = Room::orderBy('sort')->select('title', 'slug',)->get();

        $pageLocalization = PageLocalization::with("pageLocalizationBlocks")->first();

        return view('pages.localization.index', compact('home', 'pageLocalization','rooms'));
    }
}
