<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CareerApplicationController;

Route::get('/apply', [CareerApplicationController::class, 'showForm'])->name('careers.apply');
Route::post('/apply', [CareerApplicationController::class, 'submit'])->name('careers.apply.submit');

// Home route
Route::get('/', function () {
    return view('home');
});

// Contact form submission route
Route::post('/contact', [App\Http\Controllers\ContactController::class, 'submit'])->name('contact.submit');

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

// Careers subpages (blade files already exist)
Route::view('/careers/current-vacancies', 'careers.current-vacancies')->name('careers.vacancies');
Route::view('/careers/experienced-professionals', 'careers.experienced-professionals')->name('careers.professionals');
Route::view('/careers/graduate', 'careers.graduate')->name('careers.graduate');
Route::view('/careers/internship-opportunities', 'careers.internship-opportunities')->name('careers.internship');

// History page
Route::get('/history', function () {
    return view('history');
})->name('history');

// News & Updates main page
Route::view('/news-updates', 'news-and-updates.news-updates')->name('news.updates');

// Individual news articles
Route::view('/news-updates/bir-digital-tax-receipts', 'news-and-updates.bir-digital-tax-receipts')->name('news.bir-article');
Route::view('/news-updates/sec-financial-reporting-2025', 'news-and-updates.sec-financial-reporting-2025')->name('news.sec-article');
Route::view('/news-updates/psa-updates-2025', 'news-and-updates.psa-updates-2025')->name('news.psa-article');

// International page
Route::get('/international', function () {
    return view('partials.international');
})->name('international');

// Tax Tools and Information page
Route::view('/tax-tools-information', 'news-and-updates.tax-tools-information')->name('tax.tools');

// MTC Care pages
Route::view('/csr', 'mtc-care.csr')->name('mtc.csr');
Route::view('/galleries', 'mtc-care.galleries')->name('mtc.galleries');

// Current vacancies detail pages
Route::get('/current-vacancies/external-audit', function () {
    return view('current-vacancies.external-audit');
})->name('careers.external-audit');

Route::get('/current-vacancies/accounting-services', function () {
    return view('current-vacancies.accounting-services');
})->name('careers.accounting-services');
