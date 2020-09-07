<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PropertiesController;

Route::get('properties', [PropertiesController::class, 'index'])->name('properties.index');
Route::post('properties', [PropertiesController::class, 'store'])->name('properties.store');


