<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\GallaryController;
use App\Http\Controllers\PublicationController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\TypeController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('dashboard')->name('dashboard.')->group(function () {
    Route::apiResource('events', EventController::class);
    Route::apiResource('types', TypeController::class);
    Route::apiResource('category', CategoryController::class);
    Route::apiResource('sub-category', SubCategoryController::class);
    Route::apiResource('publication', PublicationController::class);
    Route::apiResource('galary', GallaryController::class);
});

