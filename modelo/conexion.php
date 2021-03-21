<?php

	/**
	 * Nombre de la clase: Conexion
	 * Fecha: 16/03/2021
	 * Version: 1.0
	 * Copyright: Wilfredo Carías
 	 * @author Wilfredo Carías
	 */

	require "credenciales.php";

	class Conexion
	{
		protected $conn;

		public function __construct()
		{
			try
			{
				$this->conn = new PDO("mysql:host=" . SERVIDOR . "; dbname=" . BASE, USUARIO, CONTRA);
				$this->conn->exec("SET CHARACTER SET utf8");
			}
			catch (Exception $e)
			{
				die("ERROR: " . $e->GetMessage());
			}
		}

	}

 ?>