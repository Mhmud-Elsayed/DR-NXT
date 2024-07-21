<?php

use App\Http\Controllers\GoogleAuthController;
use App\Http\Controllers\PrescriptionController;
use Illuminate\Support\Facades\Route;
Route::get('/prescriptions/{prescription}/print', [PrescriptionController::class, 'print'])->name('prescriptions.print');

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get("auth/google",[GoogleAuthController::class,"redirect"])->name('google-auth');
Route::get("auth/google/call-back",[GoogleAuthController::class,"callbackGoogle"]);
