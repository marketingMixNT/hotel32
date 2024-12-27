<?php

namespace App\Http\Controllers;

use App\Models\Home;
use App\Models\PageRestaurant;
use App\Models\Room;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    public function index()
    {
        $home = Home::select('logo', 'phone', 'phone_second', 'address', 'city', 'booking_link', 'booking_script', 'map', 'map_link', 'title', 'mail')
            ->addSelect(['id'])
            ->with('socials')
            ->first();

        $rooms = Room::orderBy('sort')->select('title', 'slug',)->get();


        $pageRestaurant = PageRestaurant::with(['pageRestaurantBlocks' => function ($query) {
                $query->orderBy('sort', 'asc');
             }])->first();

        return view('pages.restaurant.index', compact('home', 'pageRestaurant','rooms'));
    }
}
