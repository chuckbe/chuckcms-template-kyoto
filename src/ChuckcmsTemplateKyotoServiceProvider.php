<?php

namespace Chuckbe\ChuckcmsTemplateKyoto;

use Chuckbe\ChuckcmsTemplateKyoto\Commands\PublishKyoto;

use Illuminate\Support\ServiceProvider;

class ChuckcmsTemplateKyotoServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {   
        $this->loadMigrationsFrom(__DIR__.'/migrations');

        if ($this->app->runningInConsole()) {
            $this->commands([
                PublishKyoto::class,
            ]);
        }
        
        //php artisan vendor:publish --tag=chuckcms-template-kyoto-public --force
        $this->publishes([
            __DIR__.'/resources' => public_path('chuckbe/chuckcms-template-kyoto'),
        ], 'chuckcms-template-kyoto-public');

        // $this->publishes([
        //     __DIR__ . '/config/chuckcms-template-kyoto.php' => config_path('chuckcms-template-kyoto'),
        // ], 'chuckcms-template-kyoto-config');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->loadViewsFrom(__DIR__.'/views', 'chuckcms-template-kyoto');

        // $this->mergeConfigFrom(
        //     __DIR__ . '/config/chuckcms-template-kyoto.php', 'chuckcms-template-kyoto-config'
        // );
    }
}
