<?php

use App\Http\Controllers\rentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::get('/car-detail', function () {
    return view('car-detail');
})->name('car-detail');
Route::get('/blog', function () {
    return view('blog');
})->name('blog');
Route::get('/blog-detail', function () {
    return view('blog-detail');
})->name('blog-detail');

Route::get('/home', [rentController::class, 'home'])->name('home');
Route::get('/rent', [rentController::class, 'rent'])->name('rent');
Route::get('/aboutus', [rentController::class, 'aboutus'])->name('aboutus');
Route::get('/testimoni', [rentController::class, 'testimoni'])->name('testimoni');
Route::get('/information', [rentController::class, 'information'])->name('information');
