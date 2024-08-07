<?php

namespace App\Http\Controllers;

use App\Models\ITAsset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $brands = ITAsset::select('brand', DB::raw('count(*) as count'))->groupBy('brand')->get();
        $statuses = ITAsset::select('status', DB::raw('count(*) as count'))->groupBy('status')->get();

        return view('dashboard.index', compact('brands', 'statuses'));
    }
}
