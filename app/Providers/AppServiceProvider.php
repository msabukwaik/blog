<?php

namespace App\Providers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\ServiceProvider;
use Laravel\Dusk\DuskServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
    	DB::listen(function($query){
			Log::debug($query->sql);
		    Log::debug($query->bindings);
		    Log::debug($query->time);
	    });
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //composer require --dev laravel/dusk
	    if ($this->app->environment('local', 'testing')) {
		    $this->app->register(DuskServiceProvider::class);
	    }
    }
}
