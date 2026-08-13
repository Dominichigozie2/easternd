<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PremiumBrand;
use Illuminate\Http\Request;

class PremiumBrandController extends Controller
{
    public function index()
    {
        $brands = PremiumBrand::latest()->get();
        return view('admin.premium-brands.index', compact('brands'));
    }

    public function create()
    {
        return view('admin.premium-brands.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,jpg,png,gif,svg,webp|max:10240',
        ]);

        $data = $request->only(['name', 'description']);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('uploads'), $imageName);
            $data['image'] = $imageName;
        }

        PremiumBrand::create($data);

        return redirect()->route('admin.premium-brands.index')->with('success', 'Premium Brand created successfully!');
    }

    public function edit($id)
    {
        $brand = PremiumBrand::findOrFail($id);
        return view('admin.premium-brands.edit', compact('brand'));
    }

    public function update(Request $request, $id)
    {
        $brand = PremiumBrand::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,jpg,png,gif,svg,webp|max:10240',
        ]);

        $data = $request->only(['name', 'description']);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('uploads'), $imageName);
            $data['image'] = $imageName;
        }

        $brand->update($data);

        return redirect()->route('admin.premium-brands.index')->with('success', 'Premium Brand updated successfully!');
    }

    public function destroy($id)
    {
        $brand = PremiumBrand::findOrFail($id);
        $brand->delete();

        return redirect()->route('admin.premium-brands.index')->with('success', 'Premium Brand deleted successfully!');
    }
}
