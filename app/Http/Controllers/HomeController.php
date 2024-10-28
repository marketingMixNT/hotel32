<?php

namespace App\Http\Controllers;

use App\Models\Cta;
use App\Models\Home;
use App\Models\Room;
use App\Models\Feature;
use Illuminate\View\View;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function __invoke(Request $request): View
    {

        $home = Home::firstOrFail();
        $rooms = Room::orderBy('sort')->select('title', 'slug', 'thumbnail', 'beds', 'bathrooms')->get();
        $features = Feature::orderBy('sort')->get();
        $cta = Cta::first();
        $testimonials = Testimonial::orderBy('sort')->get();



        return view('pages.home.index', compact('home', 'rooms', 'features','cta','testimonials'));
    }
}
