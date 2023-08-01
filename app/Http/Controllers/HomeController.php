<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        // ! VALIDACION DE SESION
        if ($request->session()->has('token')) {
            $publicationController = app(PublicationController::class);
            $response = $publicationController->index();
            $publications = $response->original['publications'];

            $bannerController = app(BannerController::class);
            $response = $bannerController->index();
            $banners = $response->original['banners'];

            return view('feed.index', [
                'publications' => $publications,
                'banners' => $banners
            ]);
        }
        return view('users.auth');
    }

    public function indexMarketplace(Request $request)
    {
        $plans = app(UserPlanController::class)->byUser($request)->original['plans'];
        
        return view('marketplace.index', [
            'plans' => $plans
        ]);
    }

    public function singleProduct(Request $request)
    {
        return view('marketplace.single_product');
    }

    public function paymentsPlans(Request $request)
    {
        $planController = app(PlanController::class);
        $response = $planController->index();
        $plans = $response->original['plans'];
        
        return view('plans.index', [
            'plans' => $plans
        ]);
    }
}
