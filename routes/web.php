<?php

use App\Http\Controllers\LandingController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LandingController::class, 'index'])->name('landing');
Route::post('/contact', [LandingController::class, 'contact'])->name('landing.contact');

Route::get('dental', [App\Http\Controllers\DentalLandingController::class, 'index'])->name('dental-landing');
Route::post('dental/contact', [App\Http\Controllers\DentalLandingController::class, 'contact'])->name('dental-landing.contact');