<?php

namespace App\Modulos\Acceso;

use App\Modulos\Acceso\Role;
use App\Modulos\Acceso\RolInterface;

class RolRepositorio implements RolInterface
{

	public function __construct(){}

	public function crear(array $data)
	{
		$rol = new Role;
		
		return $this->procesar($rol, $data);
	}

	public function actualizar(array $data)
	{
		$rol = Role::find($data['id']);
		
		return $this->procesar($rol, $data);
	}

	public function obtener($id, array $relaciones = [])
	{
		$rol = Role::find($id);

		if (count($relaciones))
			$rol->load($relaciones);

		return $rol;
	}

	public function eliminar($id)
	{
		$rol = Role::whereId($id);
		
		return $rol->delete();
	}

	public function obtenerTodo(array $relaciones = [])
	{
		$roles = Role::all();
		
		if (count($relaciones))
			$roles->load($relaciones);

		return $roles;
	}	

	private function procesar($rol, $data)
	{
		$rol['name'] = $data['name'];
		$rol['display_name'] = $data['display_name'];
		$rol['description'] = $data['description'];

		$rol->save();

		if(array_key_exists('permisos', $data))
			$rol->perms()->sync($data['permisos']);

		return $rol;
	}
}