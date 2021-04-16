<?php

	interface paginacion{
		public function paginas();
	}

	interface buscador{
		public function buscar($palabra_filtro);
	}
 ?>