<?php

namespace Lasseeee\Info;

use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
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
        $this->mergeConfigFrom(__DIR__ . '/config/config.php', 'info');
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
                __DIR__.'/config/config.php' => config_path('info.php'),
            ], 'config');

            $this->publishes([
                __DIR__.'/resources/views' => resource_path('views/vendor/info'),
            ], 'views');

            $this->publishes([
                __DIR__.'/resources/lang' => resource_path('lang/vendor/info'),
            ]);
        }

        $this->registerRoutes();

        $this->loadViewsFrom(__DIR__.'/resources/views', 'info');

        $this->loadTranslationsFrom(__DIR__.'/resources/lang', 'info');

        $router = $this->app->make(Router::class);

        $router->aliasMiddleware('inform', Inform::class);
    }

    protected function registerRoutes()
    {
        Route::group($this->routeConfiguration(), function () {
            $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        });
    }

    protected function routeConfiguration()
    {
        return [
            'prefix' => config('info.prefix'),
            'middleware' => config('info.middleware'),
        ];
    }
}
