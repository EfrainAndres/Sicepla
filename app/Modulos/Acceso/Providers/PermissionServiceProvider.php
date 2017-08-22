<?php 

namespace App\Modulos\Acceso\Providers;

use Illuminate\Support\ServiceProvider;
use App\Modulos\Acceso\PermissionRepositorio;

class PermissionServiceProvider extends ServiceProvider 
{

	public function boot()
	{

	}

	public function register()
	{
        $this->app->bind('App\Modulos\Acceso\PermissionInterface', function($app)
        {
            return new PermissionRepositorio;
        });
	}

}
