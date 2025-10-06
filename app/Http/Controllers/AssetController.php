<?php

namespace App\Http\Controllers;

use App\Models\Asset;
use Illuminate\Http\Request;

class AssetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $assets = Asset::all();
        return view('admin.assets.index', compact('assets'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.assets.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image'=>'required|image|mimes:png,jpg,gif,jpeg|max:2048'
        ]);

        if($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('assets'), $imageName);

            Asset::create([
                'image'=>$imageName
            ]);
        }

        return redirect()->route('admin.asset.index')->with('success', 'Upload berhasil...');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $asset = Asset::findOrFail($id);
        
        if (file_exists(public_path('assets/' . $asset->image))) {
            unlink(public_path('assets/' . $asset->image));
        }
        $asset->delete();

        return redirect()->route('admin.assets.index')->with('success', 'Asset berhasil dihapus.');
    }
}
