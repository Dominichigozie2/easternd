<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CalidonBrand;
use Illuminate\Http\Request;

class CalidonBrandController extends Controller
{
    public function index()
    {
        $brands = CalidonBrand::latest()->get();
        return view('admin.calidon-brands.index', compact('brands'));
    }

    public function create()
    {
        return view('admin.calidon-brands.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'description' => 'required|string',
            'fsize' => 'nullable|string',
            'fbottle' => 'nullable|string',
            'ssize' => 'nullable|string',
            'sbottle' => 'nullable|string',
            'tsize' => 'nullable|string',
            'tbottle' => 'nullable|string',
            'ftsize' => 'nullable|string',
            'ftbottle' => 'nullable|string',
            'fimage' => 'nullable|image|max:10240',
            'simage' => 'nullable|image|max:10240',
            'timage' => 'nullable|image|max:10240',
            'ftimage' => 'nullable|image|max:10240',
        ]);

        $data = $request->only([
            'name', 'category', 'description',
            'fsize', 'fbottle', 'ssize', 'sbottle',
            'tsize', 'tbottle', 'ftsize', 'ftbottle',
        ]);

        foreach (['fimage', 'simage', 'timage', 'ftimage'] as $imgKey) {
            if ($request->hasFile($imgKey)) {
                $image = $request->file($imgKey);
                $imageName = time() . '_' . $imgKey . '_' . $image->getClientOriginalName();
                $image->move(public_path('uploads'), $imageName);
                $data[$imgKey] = $imageName;
            }
        }

        CalidonBrand::create($data);

        return redirect()->route('admin.calidon-brands.index')->with('success', 'Calidon Brand created successfully!');
    }

    public function edit($id)
    {
        $brand = CalidonBrand::findOrFail($id);
        return view('admin.calidon-brands.edit', compact('brand'));
    }

    public function update(Request $request, $id)
    {
        $brand = CalidonBrand::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'description' => 'required|string',
            'fsize' => 'nullable|string',
            'fbottle' => 'nullable|string',
            'ssize' => 'nullable|string',
            'sbottle' => 'nullable|string',
            'tsize' => 'nullable|string',
            'tbottle' => 'nullable|string',
            'ftsize' => 'nullable|string',
            'ftbottle' => 'nullable|string',
            'fimage' => 'nullable|image|max:10240',
            'simage' => 'nullable|image|max:10240',
            'timage' => 'nullable|image|max:10240',
            'ftimage' => 'nullable|image|max:10240',
        ]);

        $data = $request->only([
            'name', 'category', 'description',
            'fsize', 'fbottle', 'ssize', 'sbottle',
            'tsize', 'tbottle', 'ftsize', 'ftbottle',
        ]);

        foreach (['fimage', 'simage', 'timage', 'ftimage'] as $imgKey) {
            if ($request->hasFile($imgKey)) {
                $image = $request->file($imgKey);
                $imageName = time() . '_' . $imgKey . '_' . $image->getClientOriginalName();
                $image->move(public_path('uploads'), $imageName);
                $data[$imgKey] = $imageName;
            }
        }

        $brand->update($data);

        return redirect()->route('admin.calidon-brands.index')->with('success', 'Calidon Brand updated successfully!');
    }

    public function destroy($id)
    {
        $brand = CalidonBrand::findOrFail($id);
        $brand->delete();

        return redirect()->route('admin.calidon-brands.index')->with('success', 'Calidon Brand deleted successfully!');
    }
}
