<?php

namespace App\Http\Controllers;

use App\Models\AboutGallery;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $gallery = AboutGallery::first();
        return view('about', compact('gallery'));
    }
}
