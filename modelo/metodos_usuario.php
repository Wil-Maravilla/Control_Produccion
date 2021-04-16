<?php

	/**
	 * Nombre de la clase: Conexion
	 * Fecha: 18/03/2021
	 * Version: 1.0
	 * Copyright: Wilfredo Carías
 	 * @author Wilfredo Carías
	 */
	require "paginar_buscador.php";
	require "conexion.php";


	class Metodos_usuario extends Conexion implements paginacion, buscador
	{
		function __construct()
		{
			parent::__construct();
		}

		public function obtener_usuarios($desde, $hasta){
			return $this->conn->query("SELECT * FROM usuario INNER JOIN rol ON usuario.id_rol = rol.id_rol LIMIT $desde, $hasta")->fetchAll(PDO::FETCH_ASSOC);
		}

		public function obtener_rol(){
			return $this->conn->query('SELECT * FROM rol')->fetchAll(PDO::FETCH_ASSOC);
		}

		public function agregar_usuario($usuario){
			try
			{
				$sentencia = $this->conn->prepare("INSERT INTO usuario(nombre, apellido, nombre_usuario, contra, id_rol) VALUES(:nombre, :apellido, :usuario, :contra, :rol)");
				$sentencia->execute(array(":nombre"=>$usuario->get_nombre(),
									":apellido"=>$usuario->get_apellido(),
									":usuario"=>$usuario->get_usuario(),
									":contra"=>$usuario->get_contrasenia(),
									":rol"=>$usuario->get_rol()));
			}
			catch(Exception $e)
			{
				die("Error: " . $e->GetMessage());
			}
			finally
			{
				$sentencia->closeCursor();
			}

		}

		// Metodo para filtrar los registros de la tabla usuario de la BD
		public function buscar($palabra_filtro){

			$registro = htmlentities(addslashes($palabra_filtro));

			try
			{
				$sentencia = $this->conn->prepare("SELECT us.id_usuario, us.nombre, us.apellido, us.nombre_usuario, r.id_rol, r.nombre_rol FROM usuario us INNER JOIN rol r ON us.id_rol = r.id_rol WHERE nombre LIKE '%$registro%' OR apellido LIKE '%$registro%' OR nombre_usuario LIKE '%$registro%' LIMIT 5");
				$sentencia->execute();

				return $sentencia->fetchAll(PDO::FETCH_ASSOC);
			}
			catch(Exception $e)
			{
				die("Error: " . $e->GetMessage());
			}
		}

		public function paginas(){
			try{
				return $this->conn->query('SELECT COUNT(*) DIV 5 AS paginas FROM `usuario`')->fetchAll(PDO::FETCH_ASSOC);
			}
			catch(Exception $e){
				die("Error: " . $e->GetMessage());
			}
		}

	}






 ?>