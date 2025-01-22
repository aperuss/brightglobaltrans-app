<?php

use App\Http\Controllers\rentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index(rev)');
})->name('index');

Route::get('/rent', function () {
    return view('rent(rev)');
})->name('rent');

Route::get('/car-detail', function () {
    return view('car-detail');
})->name('car-detail');

Route::get('/about-us', function () {
    return view('aboutus');
})->name('aboutus');

Route::get('/testimoni', function () {
    return view('testimoni(rev)');
})->name('testimoni');

Route::get('/information', function () {
    return view('main-information');
})->name('information');

Route::get('/car-detail', function () {
    return view('car-detail');
})->name('car-detail');

Route::get('/blog', function () {
    return view('blog');
})->name('blog');

Route::get('/blog-detail', function () {
    return view('blog-detail');
})->name('blog-detail');


