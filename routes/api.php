<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\PublicationController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\UserPlanController;
use App\Http\Controllers\PaidPostController;
use App\Http\Controllers\BannerPlanController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// ? RUTAS USER
Route::post('register', [UserController::class, 'register']);
Route::post('login', [UserController::class, 'login']);
Route::prefix('user')->group(function () {
    Route::get('profile/{id}', [UserController::class, 'profile']);
    Route::post('upload', [UserController::class, 'upload']);
    Route::get('avatar/{filename}', [UserController::class, 'getAvatar']);
    Route::get('cover/{filename}', [UserController::class, 'getCover']);
});

// ? RUTAS PUBLICATIONS
Route::resource('publication', PublicationController::class);
Route::prefix('publication')->group(function () {
    Route::get('file/{filename}', [PublicationController::class, 'getFile']);
    Route::get('user/{id}', [PublicationController::class, 'getPublicationsByUser']);
});

// ? RUTAS BANNERS
Route::resource('banner', BannerController::class);
Route::prefix('banner')->group(function () {
    Route::get('file/{filename}', [BannerController::class, 'getBanner']);
});

// ? RUTAS PLANES
Route::prefix('plan')->group(function () {
    Route::get('', [PlanController::class, 'index']);
    Route::post('', [PlanController::class, 'store']);
    Route::post('subscribe', [PlanController::class, 'subscribe']);
});

// ? RUTAS USUARIOS PLANES
Route::prefix('user-plan')->group(function () {
    Route::get('by-user/{id}', [UserPlanController::class, 'byUser']);
});

//? RUTAS PUBLIACIONES PAGADAS
// Route::resource('paid-post', PaidPostController::class);
Route::prefix('paid-post')->group(function () {
    Route::get ('', [PaidPostController::class, 'index']);
    Route::post('', [PaidPostController::class, 'store']);
    Route::get ('file/{filename}', [PaidPostController::class, 'getFile']);
});

// ? RUTAS  BANNERS PLANS
Route::prefix('banner-plan')->group(function () {
    Route::get('', [BannerPlanController::class, 'index']);
});