<?php

namespace App\Modulos\Acceso\Controllers;

use App\Http\Controllers\Controller;
use App\Modulos\Acceso\RolInterface;
use App\Modulos\Acceso\PermissionInterface;
use App\Modulos\Acceso\Requests\GuardarRolRequest;
use App\Modulos\Acceso\Requests\ActualizarRolRequest;

class RolController extends Controller {

	protected $repositorio_roles;
	protected $repositorio_permisos;

	public function __construct(RolInterface $repositorio_roles, PermissionInterface $repositorio_permisos)
	{
		$this->repositorio_roles = $repositorio_roles;
		$this->repositorio_permisos = $repositorio_permisos;
	}

	public function inicio()
	{
		$roles = $this->repositorio_roles->obtenerTodo();

		$data = [
			'roles' => $roles,
			'status' => session('status')
		];

		return view('secciones.acceso.lista', $data);
	}

	public function nuevo()
	{
		$permisos = $this->repositorio_permisos->obtenerTodo();

		$data = [
			'permisos' => $permisos,
			'rol' => null,
			'status' => session('status')
		];

		return view('secciones.acceso.formulario', $data);
	}

	public function editar($id)
	{
		$permisos = $this->repositorio_permisos->obtenerTodo();
		$rol = $this->repositorio_roles->obtener($id);

		$data = [

			'permisos' => $permisos,
			'rol' => $rol,
			'status' => session('status')
		];

		return view('secciones.acceso.formulario', $data);
	}

	public function crear(GuardarRolRequest $request)
	{
		$rol = $this->repositorio_roles->crear($request->all());

		return redirect('roles/editar/'.$rol['id'])->with('status', 'success');
	}

	public function actualizar(ActualizarRolRequest $request)
	{
		$rol = $this->repositorio_roles->actualizar($request->all());

		return redirect('roles/editar/'.$rol['id'])->with('status', 'success');
	}

	public function eliminar($id)
	{
		$this->repositorio_roles->eliminar($id);

		return redirect('roles')->with('status', 'success');
	}
}