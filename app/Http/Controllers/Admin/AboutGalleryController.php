<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AboutGallery;
use Illuminate\Http\Request;

class AboutGalleryController extends Controller
{
    public function index()
    {
        $gallery = AboutGallery::firstOrCreate([]);
        return view('admin.about.index', compact('gallery'));
    }

    public function update(Request $request)
    {
        $gallery = AboutGallery::firstOrCreate([]);

        $fields = ['afimage', 'asimage', 'atimage', 'aftimage', 'afthimage', 'asximage', 'asvimage', 'aetimage'];
        $data = [];

        foreach ($fields as $field) {
            if ($request->hasFile($field)) {
                $image = $request->file($field);
                $imageName = time() . '_' . $field . '_' . $image->getClientOriginalName();
                $image->move(public_path('uploads/about'), $imageName);
                $data[$field] = $imageName;
            }
        }

        $gallery->update($data);

        return redirect()->route('admin.about.index')->with('success', 'About Gallery updated successfully!');
    }
}
