<?php
// app/Http/Controllers/ContentController.php
namespace App\Http\Controllers;

use App\Models\Content;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    public function index()
    {
        $contents = Content::all();
        return view('admin.contents.index', compact('contents'));
    }

    public function create()
    {
        return view('admin.contents.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required'
        ]);

        Content::create($request->all());

        return redirect()->route('admin.contents.index')->with('success', 'Konten berhasil dibuat.');
    }

    public function edit($id)
    {
        $content = Content::findOrFail($id);
        return view('admin.contents.edit', compact('content'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required'
        ]);

        $content = Content::findOrFail($id);
        $content->update($request->all());

        return redirect()->route('admin.contents.index')->with('success', 'Konten berhasil diupdate.');
    }

    public function destroy($id)
    {
        $content = Content::findOrFail($id);
        $content->delete();

        return redirect()->route('admin.contents.index')->with('success', 'Konten berhasil dihapus.');
    }
}