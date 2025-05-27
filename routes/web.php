<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

// Home route
Route::get('/', function () {
    return view('home');
});

// Contact form submission route
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

// Team overview page
Route::view('/team/emmanuel-y-mendoza', 'team.emmanuel-y-mendoza');
Route::view('/team/ephraim-t-tugano', 'team.ephraim-t-tugano');
Route::view('/team/pamela-grace-s-tangso', 'team.pamela-grace-s-tangso');
Route::view('/team/jekell-g-salosagcol', 'team.jekell-g-salosagcol');

// Individual Services Pages
Route::view('/services/audit-and-assurance', 'services.audit-and-assurance')->name('services.audit');
Route::view('/services/business-advisory', 'services.business-advisory')->name('services.advisory');
Route::view('/services/outsourcing', 'services.outsourcing')->name('services.outsourcing');
Route::view('/services/business-restructuring', 'services.business-restructuring')->name('services.restructuring');
Route::view('/services/corporate-finance', 'services.corporate-finance')->name('services.finance');
Route::view('/services/forensic-support', 'services.forensic-support')->name('services.forensic');
Route::view('/services/governance-risk', 'services.governance-risk')->name('services.governance');
Route::view('/services/taxation', 'services.taxation')->name('services.taxation');
