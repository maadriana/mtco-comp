<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('home');
});

// Contact form submission route
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');
