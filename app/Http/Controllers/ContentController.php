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
            'body' => 'nullable|string',
            'credit' => 'nullable|string',
            'folder' => 'required|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $folder = $request->folder;
        $destinationPath = public_path("assets/{$folder}");
        if (!file_exists($destinationPath)) mkdir($destinationPath, 0777, true);

        $filename = null;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time().'.'.$file->getClientOriginalExtension();
            $file->move($destinationPath, $filename);
        }

        Content::create([
            'title' => $request->title,
            'body' => $request->body,
            'credit' => $request->credit,
            'folder' => $folder,
            'image' => $filename,
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

        $request->validate([
            'title' => 'required|string|max:255',
            'body' => 'nullable|string',
            'credit' => 'nullable|string',
            'folder' => 'required|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $folder = $request->folder;
        $destinationPath = public_path("assets/{$folder}");
        if (!file_exists($destinationPath)) mkdir($destinationPath, 0777, true);

        $filename = $content->image;

        if ($request->hasFile('image')) {
            $old = public_path("assets/{$content->folder}/{$content->image}");
            if (file_exists($old)) unlink($old);

            $file = $request->file('image');
            $filename = time().'.'.$file->getClientOriginalExtension();
            $file->move($destinationPath, $filename);
        }

        $content->update([
            'title' => $request->title,
            'body' => $request->body,
            'credit' => $request->credit,
            'folder' => $folder,
            'image' => $filename,
        ]);

        return redirect()->route('admin.contents.index')->with('success', 'Konten berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $content = Content::findOrFail($id);
        $path = public_path("assets/{$content->folder}/{$content->image}");
        if (file_exists($path)) unlink($path);
        $content->delete();
        return back()->with('success', 'Konten berhasil dihapus!');
    }
}
