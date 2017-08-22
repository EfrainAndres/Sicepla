<?php

namespace App\Modulos\Usuario\Controllers;

use App\Http\Controllers\Controller;
use App\Modulos\Usuario\UserInterface;
use App\Modulos\Usuario\Requests\GuardarUserRequest;
use App\Modulos\Usuario\Requests\ActualizarUserRequest;

class UserController extends Controller {

	protected $repositorio_usuarios;

	public function __construct(UserInterface $repositorio_usuarios)
	{
		$this->repositorio_usuarios = $repositorio_usuarios;
	}

	public function inicio()
	{
		$usuarios = $this->repositorio_usuarios->obtenerTodo();
		$data = [
			'usuarios' => $usuarios,
			'status' => session('status')
		];

		return view('secciones.usuarios.lista', $data);
	}

	public function nuevo()
	{
		$data = [
			'usuario' => null,
			'status' => session('status')
		];

		return view('secciones.usuarios.formulario', $data);
	}

	public function editar($id)
	{
		$usuario = $this->repositorio_usuarios->obtener($id);

		$data = [
			'usuario' => $usuario,
			'status' => session('status')
		];

		return view('secciones.usuarios.formulario', $data);
	}

	public function crear(GuardarUserRequest $request)
	{
		$usuario = $this->repositorio_usuarios->crear($request->all());

		return redirect('usuarios/editar/'.$usuario['id'])->with('status', 'success');
	}

	public function actualizar(ActualizarUserRequest $request)
	{
		$usuario = $this->repositorio_usuarios->actualizar($request->all());

		return redirect('usuarios/editar/'.$usuario['id'])->with('status', 'success');
	}

	public function eliminar($id)
	{
		$this->repositorio_usuarios->eliminar($id);

		return redirect('usuarios')->with('status', 'success');
	}
}