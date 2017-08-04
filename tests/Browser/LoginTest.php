<?php

namespace Tests\Browser;

use App\User;
use Illuminate\Support\Facades\DB;
use Tests\Browser\Pages\LoginPage;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class LoginTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testSignuUp()
    {
    	$email = 'testuser123456@laravel.com';

    	//Delete the tes user if exits
	    DB::delete("delete from users where email = 'testuser123456@laravel.com'");
	    DB::commit();

	    //Create a test user for the testing purpose
	    $user = factory(User::class)->create([
		    'email' => $email,
	    ]);

	    //Test senario
	    $this->browse(function ($browser) use ($user) {
		    $browser->visit(new LoginPage)
			        ->waitForLocation('/login')
		            ->type('email', $user->email)
		            ->type('password', 'secret')
		            ->press('Login')
		            ->assertPathIs('/home');
	    });

	    //Delete the testing user after the tesk taken place
	    DB::delete("delete from users where email = '".$email."'");
	    DB::commit();
    }

    public function testSignIn(){
	    $this->browse(function ($first, $second) {
		    $first->loginAs(User::find(1))
		          ->visit('/home');
	    });
    }
}
