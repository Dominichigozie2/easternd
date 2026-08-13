<?php

namespace App\Http\Controllers;

use App\Models\PremiumBrand;
use App\Models\CalidonBrand;
use App\Models\Event;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $premiumBrands = PremiumBrand::all();
        $calidonBrands = CalidonBrand::all();
        $events = Event::orderBy('date', 'desc')->get();

        return view('home', compact('premiumBrands', 'calidonBrands', 'events'));
    }
}
