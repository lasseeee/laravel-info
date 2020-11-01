<?php

namespace Lasseeee\Info\Facades;

use Illuminate\Support\Facades\Facade;
use Illuminate\Support\Facades\Route;
use Lasseeee\Info\Http\Controllers\FAQController;
use Lasseeee\Info\Http\Controllers\NewsController;
use Lasseeee\Info\Http\Controllers\PrivacyController;
use Lasseeee\Info\Http\Controllers\TermsController;
use Lasseeee\Info\Http\Controllers\UnderstandController;

class Info extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'info';
    }

    /**
     * Register the typical info routes for an application.
     */
    public static function routes(array $options = [])
    {
        Route::namespace('\\')
        ->prefix('info')
        ->group(function () {
            Route::get('privacy', PrivacyController::class)
            ->name('info.privacy');
            Route::get('terms', TermsController::class)
            ->name('info.terms');
            Route::get('faq', FAQController::class)
            ->name('info.faq');
            Route::get('understand', UnderstandController::class)
            ->name('info.understand');
            Route::get('news', NewsController::class)
            ->name('info.news');
        });
    }
}
