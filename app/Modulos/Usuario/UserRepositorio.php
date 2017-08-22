<?php

namespace App\Modulos\Usuario;

use App\Modulos\Usuario\User;
use App\Modulos\Usuario\UserInterface;

class UserRepositorio implements UserInterface
{
	public function __cosntruct(){}

	public function crear(array $data)
	{
		$user = new User;

		return $this->procesar($user, $data);
	}

	public function actualizar(array $data)
	{
		$user = User::find($data['id']);

		return $this->procesar($user, $data);
	}

	public function obtener($id, array $relaciones = [])
	{
		$usuario = User::find($id);

		if (count($relaciones))
			$usuario->load($relaciones);

		return $usuario;
	}

	public function eliminar($id)
	{
		$user = User::find($id);

		return $user->delete();
	}

	public function obtenerTodo(array $relaciones = [])
	{
		$usuarios = User::all();

		if (count($relaciones))
			$usuarios->load($relaciones);

		return $usuarios;
	}

	private function procesar($user, $data)
	{
		$user['name'] = $data['name'];
		$user['email'] = $data['email'];

        if(array_key_exists('password', $data))
        	$user['password'] = bcrypt($data['password']);

        $user->save();
        
        return $user;
	}
}
