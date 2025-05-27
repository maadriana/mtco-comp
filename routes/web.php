<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('home');
});

// Contact form submission route
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

Route::view('/team/emmanuel-y-mendoza', 'team.emmanuel-y-mendoza');
Route::view('/team/ephraim-t-tugano', 'team.ephraim-t-tugano');
Route::view('/team/pamela-grace-s-tangso', 'team.pamela-grace-s-tangso');
Route::view('/team/jekell-g-salosagcol', 'team.jekell-g-salosagcol');
