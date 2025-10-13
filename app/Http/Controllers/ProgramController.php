<?php

namespace App\Http\Controllers;

use App\Models\Content;

class ProgramController extends Controller
{
    public function index()
    {
        $eks = Content::whereIn('folder', ['ekstrakurikuler', 'ekstrakulikuler'])->get();
        return view('program.organisasi', compact('eks'));
    }
}
