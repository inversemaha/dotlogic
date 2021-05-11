<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('/our_service', [HomeController::class, 'service']);
Route::get('/our_product', [HomeController::class, 'productPage']);
Route::get('/about', [HomeController::class, 'about']);
Route::get('/contact_us', [HomeController::class, 'contactUs']);
Route::post('/contact/save', [HomeController::class, 'contactSave']);
Route::get('/ask_for_qoute', [HomeController::class, 'askForQuote']);
