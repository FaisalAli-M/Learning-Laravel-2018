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
        /* For Route::Model
        Route::model('customer' , App\Customer::class);
        */
        /*
        Our Own Logic for Route Model 
        Route::bind('customer', function ($value) {
        return App\customer::where('c_name', $value)->first() ?? abort(404);
        */
        
        // For Extend Blade and Define your own Custom Directive for Format date and time
        /*
          Blade::directive('datetime', function ($expression) {
            return "<?php echo ($expression)->format('m/d/Y H:i'); ?>";
        });
        */
        
        // Custom if Statement in blade directive
        /*
        Blade::if('env', function ($environment) {
        return app()->environment($environment);
        });
        */
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
        
    }
}
