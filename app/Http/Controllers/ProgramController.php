<?php

namespace App\Http\Controllers;

use App\Models\Content;

class ProgramController extends Controller
{
    public function index()
    {
        $eks = Content::where('folder', 'ekstrakulikuler')->latest()->paginate(3);
        return view('program.ekskul', compact('eks'));
    }
}
