<?php

namespace App\Modulos\Acceso;

use App\Modulos\Acceso\Permission;
use App\Modulos\Acceso\PermissionInterface;

class PermissionRepositorio implements PermissionInterface
{

	public function __construct(){}

	public function obtenerTodo(array $relaciones = [])
	{
		$permisos = Permission::all();
		
		if (count($relaciones))
			$permisos->load($relaciones);

		return $permisos;
	}
}