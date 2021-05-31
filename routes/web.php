<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\QuoteController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('/service', [HomeController::class, 'service']);
Route::get('/product', [HomeController::class, 'productPage']);
Route::get('/about', [HomeController::class, 'about']);
Route::get('/contact', [HomeController::class, 'contactUs']);
Route::any('/contact/save', [ContactController::class, 'contactSave']);
Route::get('/ask_for_qoute', [HomeController::class, 'askForQuote']);
Route::any('/quote/store', [QuoteController::class, 'quoteSave']);
