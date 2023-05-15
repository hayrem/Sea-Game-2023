<?php

use App\Http\Controllers\MatchingController;
use App\Http\Controllers\Sport_EventController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::prefix('/matching')->group(function() {
    Route::get('/', [MatchingController::class, 'index']);
    Route::post('/', [MatchingController::class, 'store']);
    Route::get('/{id}', [MatchingController::class, 'show']);
    Route::put('/{id}', [MatchingController::class, 'update']);
    Route::delete('/{id}', [MatchingController::class, 'destroy']);
});
Route::prefix('sport_event')->group(function() {
    Route::get('/', [Sport_EventController::class, 'index']);
});
