<?php 

namespace App\Modulos\Acceso\Providers;

use Illuminate\Support\ServiceProvider;
use App\Modulos\Acceso\RolRepositorio;

class RolServiceProvider extends ServiceProvider 
{

	public function boot()
	{

	}

	public function register()
	{
        $this->app->bind('App\Modulos\Acceso\RolInterface', function($app)
        {
            return new RolRepositorio;
        });
	}

}
