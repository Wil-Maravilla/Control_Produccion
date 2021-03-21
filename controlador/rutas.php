<?php

	/**
	 * Nombre de la clase: Ruta
	 * Fecha: 20/03/2021
	 * Version: 1.0
	 * Copyright: Wilfredo Carías
 	 * @author Wilfredo Carías
	 */

	// Definiendo las rutas del sistema para cargar archivos y navegar entre paginas
	class Ruta
	{
		private $ruta_actual;
		private $ruta_index;
		private $ruta_navegacion;
		private $ruta_src;
		private $titulo;

		/* Constructor que inicializa los atributos ruta_actual y titulo, para evaluar la ruta actual de navegacion y asi poder establecer una ruta para cargar archivos de estilo, funcionalidad js y navegacion del menu */
		function __construct($rutaActual, $titulo)
		{
			$this->titulo = $titulo;
			$this->ruta_actual = $rutaActual;

			if ($this->ruta_actual=='C:\xampp\htdocs\Control_Produccion')
			{
				$this->ruta_src = "vista/resources/";
				$this->ruta_index = "index.php";
				$this->ruta_navegacion = "vista/";
			}
			else if ($this->ruta_actual=='C:\xampp\htdocs\Control_Produccion\vista')
			{
				$this->ruta_src = "resources/";
				$this->ruta_index = "../index.php";
			}
		}

		public function get_ruta_src(){
			return $this->ruta_src;
		}

		public function get_ruta_inicio(){
			return $this->ruta_index;
		}

		public function get_ruta_navegacion(){
			return $this->ruta_navegacion;
		}

		public function get_titulo(){
			return $this->titulo;
		}

	}

 ?>