<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KontrolerStrony;

Route::get('/', [KontrolerStrony::class, 'home'])->name('home');
Route::get('/about', [KontrolerStrony::class, 'about'])->name('about');
Route::get('/gallery', [KontrolerStrony::class, 'gallery'])->name('gallery');
Route::get('/contact', [KontrolerStrony::class, 'contact'])->name('contact'); 
Route::get('/formresult', [KontrolerStrony::class, 'formresult'])->name('formresult'); 
Route::post('/handleForm', [KontrolerStrony::class, 'handleForm'])->name('handleForm');
Route::post('/clearFormData', [KontrolerStrony::class, 'clearFormData'])->name('clearFormData');
