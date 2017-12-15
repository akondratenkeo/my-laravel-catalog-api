<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        if ($this->app->environment() !== 'production') {
            $this->app->register(\Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider::class);
        }

        $this->app->bind('helps', function() {

            return new class {

                private $demo = 'Helps::test()';

                public function test()
                {
                    echo $this->demo;
                }
            };
        });

        $loader = \Illuminate\Foundation\AliasLoader::getInstance();
        $loader->alias('Helps', \App\Facades\Helps::class);
    }
}
