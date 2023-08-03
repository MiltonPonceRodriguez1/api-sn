<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BannerPlan;

class BannerPlanController extends Controller
{
    public function index()
    {
        $bannerPlans = BannerPlan::all();

        return response()->json([
            'status' => 'success',
            'plans' => $bannerPlans
        ], 200);
    }
}
