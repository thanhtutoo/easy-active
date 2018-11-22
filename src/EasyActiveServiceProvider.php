<?php

namespace Thanhtut\EasyActive;

use Illuminate\Support\ServiceProvider;

class EasyActiveServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/config/config.php', 'config'
        );
    }
}
