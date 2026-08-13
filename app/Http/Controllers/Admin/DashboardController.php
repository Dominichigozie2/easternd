<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PremiumBrand;
use App\Models\CalidonBrand;
use App\Models\Event;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $premiumCount = PremiumBrand::count();
        $calidonCount = CalidonBrand::count();
        $eventCount = Event::count();

        $latestPremium = PremiumBrand::latest()->take(5)->get();
        $latestCalidon = CalidonBrand::latest()->take(5)->get();
        $latestEvents = Event::latest()->take(5)->get();

        return view('admin.dashboard', compact(
            'premiumCount', 'calidonCount', 'eventCount',
            'latestPremium', 'latestCalidon', 'latestEvents'
        ));
    }
}
