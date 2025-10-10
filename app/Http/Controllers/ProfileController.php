<?php

namespace App\Http\Controllers;

use App\Models\Content;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $alumnis = Content::where('folder', 'alumni')->latest()->paginate(3);
        return view('profile.index', compact('alumnis'));
    }
}
