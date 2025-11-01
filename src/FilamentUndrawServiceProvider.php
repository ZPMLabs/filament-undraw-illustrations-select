<?php

namespace ZPMLabs\FilamentUndraw;

use Illuminate\Support\ServiceProvider;

class FilamentUndrawServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'filament-undraw');
        
        $this->publishes([
            __DIR__ . '/../resources/views' => resource_path('views/vendor/filament-undraw'),
        ], 'filament-undraw-views');
    }
}
