<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\PublicationController;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\UserPlanController;
use App\Http\Controllers\PaidPostController;
use App\Models\UserPlan;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// ? RUTAS HOME
// Route::get('', [HomeController::class, 'index'])->name('feed');
Route::get('', function() {
    return view('welcome');
});

// ? RUTAS USER
Route::post('register', [UserController::class, 'register'])->name('register');
Route::post('login', [UserController::class, 'login']);
Route::get('logout', [UserController::class, 'logout']);
Route::get('profile/{id}', [UserController::class, 'profile'])->name('profile')->middleware('jwt.auth');
Route::post('upload/{disk}', [UserController::class, 'upload'])->name('user.upload')->middleware('jwt.auth');
Route::prefix('user')->group(function () {
    Route::get('avatar/{filename}', [UserController::class, 'getAvatar']);
    Route::get('cover/{filename}', [UserController::class, 'getCover']);
});

// ? RUTAS PUBLICACIONES
Route::resource('publication', PublicationController::class);
Route::prefix('publication')->group(function () {
    Route::get('file/{filename}', [PublicationController::class, 'getFile']);
    Route::get('user/{id}', [PublicationController::class, 'getPublicationsByUser']);
});

// ? RUTAS PUBLICACIONES
Route::resource('banner', BannerController::class);
Route::get('banner/file/{filename}', [BannerController::class, 'getBanner']);

// ? RUTAS MARKETPLACE
Route::get('marketplace', [HomeController::class, 'indexMarketplace'])->name('market.index');
Route::get('product', [HomeController::class, 'singleProduct'])->name('market.product');

// ? RUTAS PAYMENTS PLANS
Route::get('upgrade', [HomeController::class, 'paymentsPlans'])->name('upgrade.plans');

// ? RUTAS PLANES
// Route::resource('plan', PlanController::class);
// Route::post('plan/subscribe/{id}', [PlanController::class, 'subscribe'])->name('plans.subscribe');

// ? RUTAS SUSCRIPCIÓN PLANES
// Route::resource('user-plan', UserPlanController::class);
// Route::get('plans-by-user', [UserPlanController::class, 'byUser'])->name('user-plan.by-user');

//? RUTAS PUBLIACIONES PAGADAS
// Route::resource('paid-post', PaidPostController::class);
