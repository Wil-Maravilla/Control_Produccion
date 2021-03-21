<?php

	/**
	 * Nombre de la clase: Conexion
	 * Fecha: 18/03/2021
	 * Version: 1.0
	 * Copyright: Wilfredo Carías
 	 * @author Wilfredo Carías
	 */

	require "conexion.php";

	class Metodos_usuario extends Conexion
	{

		function __construct()
		{
			parent::__construct();
		}

		public function obtener_usuarios(){
			return $this->conn->query('SELECT * FROM usuario')->fetchAll(PDO::FETCH_ASSOC);
		}

		public function obtener_rol(){
			return $this->conn->query('SELECT * FROM rol')->fetchAll(PDO::FETCH_ASSOC);
		}

		public function agregar_usuario($usuario){
			try
			{
				$sentencia = $this->conn->prepare("INSERT INTO usuario(usuario, contra, id_rol) VALUES(:usuario, :contra, :rol)");
				$sentencia->execute(array(":usuario"=>$usuario->get_usuario(),
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

	}






 ?>