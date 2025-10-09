<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Visitor;

class VisitorController extends Controller
{
    // DIPAKE UNTUK REALTIME UPDATE TANPA HARUS RELOAD, JANGAN SENTUK WKWK
    public function Update()
    {
        $visitors = Visitor::selectRaw('visit_date, COUNT(DISTINCT ip_address) as total')
            ->groupBy('visit_date')
            ->orderBy('visit_date', 'ASC')
            ->where('visit_date', '>=', now()->subDays(6))
            ->get();

        return response()->json($visitors);

        if (!auth()->check() || auth()->user()->role !== 'admin') {
            abort(403);
        }
    }
}
