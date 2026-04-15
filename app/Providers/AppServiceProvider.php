<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL;
use Illuminate\Pagination\Paginator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Força HTTPS para que os assets (CSS, JS) sejam carregados corretamente
        if (str_contains(config('app.url'), 'https')) {
            URL::forceScheme('https');
        }

        // Usa paginação simples (sem Tailwind/Bootstrap)
        Paginator::useBootstrap();
    }
}
