<?php

namespace Sxp\Contact\Providers;

use Illuminate\Support\ServiceProvider;
use Sxp\Contact\Services\ContactService;

class ContactServiceProvider extends ServiceProvider
{
    /**
     * Register services.``
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/contact.php', 'contact'
        );

        $this->app->singleton('contact-service', function ($app) {
            return new ContactService();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'contact');
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');

        $this->publishes([
            __DIR__.'/../config/contact.php' => config_path('contact.php'),
        ],'config');

    }
}
