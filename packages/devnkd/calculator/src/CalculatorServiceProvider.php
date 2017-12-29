<?php
namespace Devnkd\Calculator;

use Illuminate\Support\ServiceProvider;

class CalculatorServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {

    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        include __DIR__.'/routes.php';
        
        $this->app->make('Devnkd\Calculator\CalculatorController');

        $this->loadViewsFrom(__DIR__.'/views', 'calculator');
    }
}
