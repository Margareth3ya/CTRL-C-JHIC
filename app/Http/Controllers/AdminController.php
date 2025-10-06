<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard() {
        $userCount = \App\Models\User::count();
        $assetCount = \App\Models\Asset::count();
        $contentCount = \App\Models\Content::count();

        return view('admin.dashboard', compact('userCount', 'assetCount', 'contentCount'));
    }
}
