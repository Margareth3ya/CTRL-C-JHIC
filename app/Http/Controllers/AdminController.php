<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Asset;
use App\Models\Content;
use App\Models\Visitor;
use Carbon\Carbon;

class AdminController extends Controller
{
    public function dashboard()
    {
        $userCount = User::count();
        $assetCount = Asset::count();
        $contentCount = Content::count();

        // FUNGSI UTAMA STATISTIK SEMENTARA DI 7 HARI TERAKHIR, JANGAN SENTUH BAHAYA
        $visitors = Visitor::selectRaw('visit_date, COUNT(DISTINCT ip_address) as total')
            ->groupBy('visit_date')
            ->orderBy('visit_date', 'ASC')
            ->where('visit_date', '>=', now()->subDays(6))
            ->get();

        $labels = $visitors->pluck('visit_date')->map(fn($d) => Carbon::parse($d)->format('d M'));
        $data = $visitors->pluck('total');

        return view('admin.dashboard', compact(
            'userCount',
            'assetCount',
            'contentCount',
            'labels',
            'data'
        ));
    }

    // buat protection apis
    public function getVisitorStats()
    {
        $visitors = \App\Models\Visitor::selectRaw('visit_date, COUNT(DISTINCT ip_address) as total')
            ->groupBy('visit_date')
            ->orderBy('visit_date', 'ASC')
            ->where('visit_date', '>=', now()->subDays(6))
            ->get();

        return response()->json($visitors);
    }

}
