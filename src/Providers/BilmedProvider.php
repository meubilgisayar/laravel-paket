<?php

namespace Beecorp\Bilmed\Providers;

use Illuminate\Support\ServiceProvider;
class BilmedProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        $this->loadViewsFrom(__DIR__.'/../views', 'greeting');
    }
}
