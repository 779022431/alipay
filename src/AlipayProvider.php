<?php

namespace Jeason\Alipay;

use Illuminate\Support\ServiceProvider;

class AlipayProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('Alipay1', function ($app) {
            return new Alipay();//config
        });
    }
    public function provides()
    {
        return ['Alipay1'];
    }
}
