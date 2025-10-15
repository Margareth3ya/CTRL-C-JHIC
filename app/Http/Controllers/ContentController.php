<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Content;

class ContentController extends Controller
{
    public function index()
    {
        $contents = Content::latest()->get();
        return view('admin.contents.index', compact('contents'));
    }

    public function create()
    {
        return view('admin.contents.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'body' => 'required|string',
            'folder' => 'required|string',
            'image' => 'required',
            'image.*' => 'image|mimes:jpeg,png,jpg,gif,webp'
        ]);

        $images = [];

        // Ambil semua file dari input image[]
        if ($request->hasFile('image')) {
            foreach ($request->file('image') as $file) {
                $filename = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('assets/' . $request->folder), $filename);
                $images[] = $filename;
            }
        }

        // Simpan ke database
        Content::create([
            'title' => $request->title,
            'body' => $request->body,
            'folder' => $request->folder,
            'image' => json_encode($images),
        ]);

        return redirect()->route('admin.contents.index')->with('success', 'Konten berhasil ditambahkan!');
    }



    public function edit($id)
    {
        $content = Content::findOrFail($id);
        return view('admin.contents.edit', compact('content'));
    }

    public function update(Request $request, $id)
    {
        $content = Content::findOrFail($id);

        $data = $request->validate([
            'title' => 'required|string',
            'body' => 'nullable|string',
            'credit' => 'nullable|string',
            'folder' => 'required|string',
            'images.*' => 'nullable|image|mimes:jpg,jpeg,png',
            'image' => 'nullable|image|mimes:jpg,jpeg,png',
        ]);

        if ($request->folder === 'ssb' && $request->hasFile('images')) {
            $images = [];
            foreach ($request->file('images') as $file) {
                $name = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('assets/ssb'), $name);
                $images[] = $name;
            }
            $data['image'] = json_encode($images);
        } elseif ($request->hasFile('image')) {
            $file = $request->file('image');
            $name = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('assets/' . $request->folder), $name);
            $data['image'] = $name;
        }
        $content->update($data);
        return redirect()->route('admin.contents.index')->with('success', 'Konten berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $content = Content::findOrFail($id);
        $path = public_path("assets/{$content->folder}/{$content->image}");
        if(file_exists($path))
            unlink($path);
        $content->delete();
        return back()->with('success', 'Konten berhasil dihapus!');
    }
}
