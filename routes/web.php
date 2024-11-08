<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\ProductController;
Route::get('/', function () {
    return view('welcome');
});
Route::get('/wiadomosc', function () {
    return view('wiadomosc');
});


Route::get('/categories', [ProductController::class, 'index'])->name('categories.index');
Route::get('/categories/{id}', [ProductController::class, 'showCategoryProducts'])->name('categories.show');
