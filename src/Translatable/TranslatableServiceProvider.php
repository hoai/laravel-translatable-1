<?php

namespace Hoai\Translatable;

use Illuminate\Support\ServiceProvider;

class TranslatableServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/content_translatable.php' => config_path('content_translatable.php'),
        ], 'content_translatable');
    }

    /**
     * Register the service provider.
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/content_translatable.php', 'content_translatable'
        );
    }
}
