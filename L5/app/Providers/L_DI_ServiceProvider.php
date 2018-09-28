<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class L_DI_ServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    
    protected $defer = true; /* it run this provider only on those function whic you want to access by default it is false so run all the http requests */
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
        //
        \App::bind("App\L_DI_ServiceContainer\Facebook" , function(){
        return new \App\L_DI_ServiceContainer\Facebook(config('services.facebook'));
        });
    }
}
