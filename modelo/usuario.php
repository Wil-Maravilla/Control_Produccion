<?php

	/**
	 * Nombre de la clase: Conexion
	 * Fecha: 16/03/2021
	 * Version: 1.0
	 * Copyright: Wilfredo Carías
 	 * @author Wilfredo Carías
	 */

	class Usuario
	{
		private $id_usuario;
		private $usuario;
		private $contrasenia;
		private $rol;

		public function __construct($id, $usuario, $contrasenia, $rol)
		{
			$this->id_usuario = $id;
			$this->usuario = $usuario;
			$this->contrasenia = $contrasenia;
			$this->rol = $rol;
		}

		public function get_id(){
			return $this->id_usuario;
		}

		public function set_id($id){
			$this->id_usuario = $id;
		}

		public function get_usuario(){
			return $this->usuario;
		}

		public function set_usuario($usuario){
			$this->usuario = $usuario;
		}

		public function get_contrasenia(){
			return $this->contrasenia;
		}

		public function set_contrasenia($contrasenia){
			$this->contrasenia = $contrasenia;
		}

		public function get_rol(){
			return $this->rol;
		}

		public function set_rol($rol){
			$this->rol = $rol;
		}
	}

 ?>