<?php

namespace Tysweezy\Rekt;

use Illuminate\Support\ServiceProvider;

class RektServiceProvider extends ServiceProvider {
    
    public function boot()
    {

        // publish config file
        $this->publishes([
            __DIR__.'/../config/rekt.php' => config_path('rekt.php'),
        ], 'config');
        
        // publish migration file
        $timestamp = date('Y_m_d_His', time());
        
        $this->publishes([
            __DIR__.'/../database/migrations/create_rekt_tables.php.stub' 
                => $this->app->databasePath()."/migrations/{$timestamp}_create_rekt_tables.php"
        ], 'migrations');
    }


    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/rekt.php',
            'rekt'
        );
    }

}