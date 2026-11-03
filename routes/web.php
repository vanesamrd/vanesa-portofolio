<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ContactController;

Route::get('/', [PortfolioController::class, 'index'])->name('portfolio');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
