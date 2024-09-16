<?php

use App\Http\Controllers\AirportsController;
use App\Models\Airport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/search', [AirportsController::class, 'search'])->name('search');

Route::get('/test', function () {
    return response()->json(['message' => 'API is working!']);
});
