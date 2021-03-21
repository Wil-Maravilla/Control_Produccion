<?php

	/**
	 * Nombre de la clase: Login
	 * Fecha: 16/03/2021
	 * Version: 1.0
	 * Copyright: Wilfredo Carías
 	 * @author Wilfredo Carías
	 */

	class Login
	{
		private $usuario;

		public function __construct($usuario)
		{
			$this->usuario = $usuario;
			parent::__construct();
		}

		public function verificar_usuario()
		{
			$consulta = "SELECT COUNT(id) as 'Login' * FROM usuario WHERE id_usuario = $usuario->get_id()";
			$resultado = $this->conexion->query($consulta)->fetchAll(PDO::FETCH_OBJ);
			return $resultado;
		}
	}




?>