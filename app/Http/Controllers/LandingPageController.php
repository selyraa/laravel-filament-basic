<?php

namespace App\Http\Controllers;

use App\Models\Hero;
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
        // return view
        return view('welcome', compact('hero', 'mainTitle', 'animationTitle'));
    }
}
