<?php

namespace Lasseeee\Info;

use Illuminate\Routing\Router;
use Lasseeee\Info\Facades\Info;use Illuminate\Support\ServiceProvider;
use Lasseeee\Info\Http\Middleware\Inform;

class InfoServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('info', function($app) {
            return new Info();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/resources/views' => resource_path('views/vendor/info'),
            ], 'views');

            $this->publishes([
                __DIR__.'/resources/lang' => resource_path('lang/vendor/info'),
            ]);
        }

        $this->loadViewsFrom(__DIR__.'/resources/views', 'info');

        $this->loadTranslationsFrom(__DIR__.'/resources/lang', 'info');

        $router = $this->app->make(Router::class);

        $router->aliasMiddleware('inform', Inform::class);
    }
}
