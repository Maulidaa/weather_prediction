<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AirQualityController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/kualitas-udara/{lokasi}', [AirQualityController::class, 'show'])->name('kualitas-udara.show');

Route::get('/kualitas-udara', [AirQualityController::class, 'index'])->name('kualitas-udara');
