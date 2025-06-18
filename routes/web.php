<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\DomainCategory;
use App\Http\Controllers\OtpController;
use App\Http\Controllers\PaymentController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', function () {
    return view('index');
});



Route::get('/domain-category', [DomainCategory::class, 'show'])->name('domain.category');


Route::get('/contact-information', [ContactController::class, 'showForm'])->name('contact.page');
Route::post('/contact-information', [ContactController::class, 'submit'])->name('contact.submit');


Route::post('/payment-details', [OtpController::class, 'paymentDetails'])->name('payment.details');


Route::get('/skip-payment', [PaymentController::class, 'skipPayment'])->name('payment.skip');
Route::get('/confirmation', function () {
    return view('layouts.confirmation');
});
