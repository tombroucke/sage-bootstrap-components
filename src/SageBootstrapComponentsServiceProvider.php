<?php

namespace Otomaties\SageBootstrapComponents;

use Illuminate\Support\ServiceProvider;

class SageBootstrapComponentsServiceProvider extends ServiceProvider
{

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        if (file_exists(__DIR__ . '/../publishes/app/View/Components/')) {
            $publishable[__DIR__ . '/../publishes/app/View/Components/'] = $this->app->path('View/Components/');
        }
        if (file_exists(__DIR__ . '/../publishes/resources/views/components/')) {
            $publishable[__DIR__ . '/../publishes/resources/views/components/'] = $this->app->resourcePath('views/components/');
        }
        $this->publishes($publishable, 'Bootstrap components');
    }
}
