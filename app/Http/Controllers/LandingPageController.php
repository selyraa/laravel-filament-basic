<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Hero;
use App\Models\Portfolio;
use App\Models\Service;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    // create function index
    public function index()
    {
        // get one hero that is active
        $hero = Hero::where('is_active', true)->first();
        [$mainTitle, $animationTitle] = explode('#', $hero->title);
        $animationTitle = explode('|', $animationTitle);

        // get all services record order by sort column
        $services = Service::orderBy('sort')->get();

        // get all portfolios record that related to the portfolio category
        $portfolios = Portfolio::with('portfolioCategory')->inRandomOrder()->limit(10)->get();

        // get all clients record
        $clients = Client::inRandomOrder()->get();

        // return view
        return view('welcome', compact('hero', 'mainTitle', 'animationTitle', 'services', 'portfolios', 'clients'));
    }
}
