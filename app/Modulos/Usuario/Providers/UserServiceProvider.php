<?php 

namespace App\Modulos\Usuario\Providers;

use Illuminate\Support\ServiceProvider;
use App\Modulos\Usuario\UserRepositorio;

class UserServiceProvider extends ServiceProvider 
{

	public function boot()
	{

	}

	public function register()
	{
        $this->app->bind('App\Modulos\Usuario\UserInterface', function($app)
        {
            return new UserRepositorio;
        });
	}

}
