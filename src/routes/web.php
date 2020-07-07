<?php

use Illuminate\Support\Facades\Route;
use Lasseeee\Info\Http\Controllers\FAQController;
use Lasseeee\Info\Http\Controllers\TermsController;
use Lasseeee\Info\Http\Controllers\PrivacyController;
use Lasseeee\Info\Http\Controllers\UnderstandController;


Route::middleware('tenant.identify')->domain('{tenant}.' . config('app.url'))
->group(function () {
    Route::get('privacy', PrivacyController::class)
    ->name('info.privacy');
    Route::get('terms', TermsController::class)
    ->name('info.terms');
    Route::get('faq', FAQController::class)
    ->name('info.faq');
    Route::get('understand', UnderstandController::class)
    ->name('info.understand');
});
