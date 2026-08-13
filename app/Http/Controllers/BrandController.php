<?php

namespace App\Http\Controllers;

use App\Models\PremiumBrand;
use App\Models\CalidonBrand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function premiumDetail($id)
    {
        $brand = PremiumBrand::findOrFail($id);
        $otherBrands = PremiumBrand::where('id', '!=', $id)->get();
        return view('brands.premium-detail', compact('brand', 'otherBrands'));
    }

    public function calidonDetail($id)
    {
        $brand = CalidonBrand::findOrFail($id);
        $otherBrands = CalidonBrand::where('id', '!=', $id)->get();
        return view('brands.calidon-detail', compact('brand', 'otherBrands'));
    }
}
