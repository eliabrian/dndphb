<?php

use App\Http\Controllers\Api\ComponentController;
use App\Http\Controllers\SchoolController;
use App\Http\Controllers\SpellController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// API Routes
Route::name('api.')->group(function () {
    // Component Routes
    Route::name('component.')->group(function () {
        Route::prefix('components')->group(function () {
            Route::get('/', [ComponentController::class, 'index'])->name('index');
            Route::get('/{component:slug}', [ComponentController::class, 'show'])->name('show');
        });
    });

    // School Routes
    Route::name('school.')->group(function () {
        Route::prefix('schools')->group(function () {
            Route::get('/', [SchoolController::class, 'index'])->name('index');
            Route::get('/{school:slug}', [SchoolController::class, 'show'])->name('show');
        });
    });

    // Spell Routes
    Route::name('spell.')->group(function () {
        Route::prefix('spells')->group(function () {
            Route::get('/', [SpellController::class, 'index'])->name('index');
            Route::get('/{spell:slug}', [SpellController::class, 'show'])->name('show');
        });
    });
});
