<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Mylibs\Common;

class OtherServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
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
	    require_once __DIR__ . '/../Others/FooService.php';
	    $this->app->bind('FooService', \App\Mylibs\FooService::class);
    }
}

class hello{

	/**
	 * hello constructor.
	 */
	public function __construct() {
	}
}
