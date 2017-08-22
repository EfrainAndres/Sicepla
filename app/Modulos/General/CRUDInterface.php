<?php 

namespace App\Modulos\General;

interface CRUDInterface 
{
	public function crear(array $data);
	public function actualizar(array $data);
	public function obtener($id, array $relaciones = []);
	public function eliminar($id);
	public function obtenerTodo(array $relaciones = []);
}