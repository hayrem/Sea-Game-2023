<?php

use App\Http\Controllers\MatchingController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\StadiumController;
use App\Http\Controllers\TicketController;
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
Route::prefix('/stadium')->group(function() {
    Route::get('/', [StadiumController::class, 'index']);
    Route::post('/', [StadiumController::class, 'store']);
    Route::get('/{id}', [StadiumController::class, 'show']);
    Route::put('/{id}', [StadiumController::class, 'update']);
    Route::delete('/{id}', [StadiumController::class, 'destroy']);
});

Route::prefix('/matching')->group(function() {
    Route::get('/', [MatchingController::class, 'index']);
    Route::post('/', [MatchingController::class, 'store']);
    Route::get('/{id}', [MatchingController::class, 'show']);
    Route::put('/{id}', [MatchingController::class, 'update']);
    Route::delete('/{id}', [MatchingController::class, 'destroy']);
});
Route::prefix('/ticket')->group(function() {
    Route::get('/', [TicketController::class, 'index']);
    Route::post('/', [TicketController::class, 'store']);
    Route::get('/{id}', [TicketController::class, 'show']);
    Route::put('/{id}', [TicketController::class, 'update']);
    Route::delete('/{id}', [TicketController::class, 'destroy']);
});

Route::prefix('/event')->group(function() {
    Route::get('/', [EventController::class, 'index']);
    Route::post('/', [EventController::class, 'store']);
    Route::get('/{id}', [EventController::class, 'show']);
    Route::put('/{id}', [EventController::class, 'update']);
    Route::delete('/{id}', [EventController::class, 'destroy']);
});

