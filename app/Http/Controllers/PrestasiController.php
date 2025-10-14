<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Content;

class PrestasiController extends Controller
{
    public function index()
    {
        $prestasi = Content::where('folder', 'prestasi')->latest()->paginate(3);
        $prestasi2 = Content::where('folder', 'prestasi2')->latest()->paginate(3);
        return view('informasi.prestasi', compact('prestasi', 'prestasi2'));
    }
}
