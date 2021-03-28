<?php

	require 'conexion.php';

	/**
	 * Nombre de la clase: Buscador_M
	 * Fecha: 28/03/2021
	 * Version: 1.0
	 * Copyright: Wilfredo Carías
 	 * @author Wilfredo Carías
	 */

	class Buscador_M extends Conexion
	{
		private $palabra;
		private $tabla;

		function __construct($palabra, $tabla)
		{
			parent::__construct();
			$this->palabra = htmlentities(addslashes($palabra));
			$this->tabla = $tabla;
		}

		function buscar(){
			// Evaluando en que tabla de la BD hay que hacer la busqueda del registro
			switch ($this->tabla) {
				case 'usuario':
					return $this->buscar_usuario();
				break;

				default:
					# code...
					break;
			}
		}

		// Metodo para filtrar los registros de la tabla usuario de la BD
		public function buscar_usuario(){
			try
			{
				$sentencia = $this->conn->prepare("SELECT us.id_usuario, us.nombre, us.apellido, us.nombre_usuario, r.id_rol, r.nombre_rol FROM usuario us INNER JOIN rol r ON us.id_rol = r.id_rol WHERE nombre LIKE '%$this->palabra%' OR apellido LIKE '%$this->palabra%' OR nombre_usuario LIKE '%$this->palabra%' LIMIT 10");
				$sentencia->execute();

				return $sentencia->fetchAll(PDO::FETCH_ASSOC);
			}
			catch(Exception $e)
			{
				die("Error: " . $e->GetMessage());
			}
		}
	}

 ?>