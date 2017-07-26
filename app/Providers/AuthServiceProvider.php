<?php

namespace App\Providers;

use function foo\func;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
	    'App\Model' => 'App\Policies\ModelPolicy',
	    'App\Task' => 'App\Policies\TaskPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //Gate::define('update-post', function($user, $post){
        //	return $user->id = $post->user_id;
        //});

        //Gate::resource('posts', 'PostPolicy');

        //Gate::define('posts.view','PostPolicy@view');

	    //Gate::resource('tasks', 'TaskPolicy');
	    //Log::debug("Inside the task policy");
	    //Gate::define('tasks.view', 'App\Policies\TaskPolicy@view');
    }
}
