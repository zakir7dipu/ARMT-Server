<?php

use App\Http\Controllers\Api\Auth\LoginController;
use App\Http\Controllers\Api\Guest\GuestViewController;
use App\Http\Controllers\Api\HomePageController;
use App\Http\Controllers\Api\SliderController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
Route::prefix('app')->group(function (){
    Route::post('/login', [LoginController::class, 'login']);
    Route::get('/social-links', [GuestViewController::class, 'getSocialLinks']);
    Route::get('/base-info', [GuestViewController::class, 'baseInfoSection']);
    Route::get('/partner', [GuestViewController::class, 'partnerView']);
    Route::get('/slider', [GuestViewController::class, 'sliderView']);
    Route::get('/about', [GuestViewController::class, 'aboutSection']);
    Route::get('/events', [GuestViewController::class, 'eventsSection']);
    Route::get('/projects', [GuestViewController::class, 'projectsView']);
    Route::get('/projects-single/{project}', [GuestViewController::class, 'projectSingleView']);

    Route::middleware('custom.auth')->prefix('dashboard')->group(function (){
        Route::resource('/slider',SliderController::class);
        Route::get('/about-section', [HomePageController::class, 'aboutSection']);
        Route::post('/about-section', [HomePageController::class, 'aboutSectionStore']);
    });
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
