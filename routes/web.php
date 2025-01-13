<?php

use App\Http\Controllers\rentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::get('/home', [rentController::class, 'home'])->name('home');
Route::get('/rent', [rentController::class, 'rent'])->name('rent');
Route::get('/aboutus', [rentController::class, 'aboutus'])->name('aboutus');
Route::get('/testimoni', [rentController::class, 'testimoni'])->name('testimoni');
Route::get('/information', [rentController::class, 'information'])->name('information');
